<?php
class PedidoService {
    private array $observers = [];

    public function __construct(private PedidoRepository $repo) {}

    public function addObserver(OrderObserver $obs) { $this->observers[] = $obs; }

    public function criarPedido(array $data): Pedido {
        $pedido = PedidoFactory::create($data);
        
        // Calcula Total
        $total = 0;
        foreach ($pedido->itens as $item) {
            $total += $item->produto->preco * $item->quantidade;
        }

        // Aplica Strategy (Desconto se > 200)
        $strategy = ($total > 200) ? new ChristmasDiscount() : new NoDiscount();
        $pedido->total = $strategy->apply($total);

        // Gera Link WhatsApp
        $msg = urlencode("Olá! Novo pedido: {$pedido->id}. Total: R$ " . number_format($pedido->total, 2));
        $pedido->whatsappLink = "https://wa.me/5588999999999?text=$msg";

        $this->repo->save($pedido);

        // Notifica Observadores
        foreach ($this->observers as $obs) { $obs->update($pedido); }

        return $pedido;
    }

    public function listarTudo() { return $this->repo->findAll(); }
}