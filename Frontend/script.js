const API_URL = 'http://localhost:8000/backend/api/index.php';
let carrinho = [];

// 1. Adiciona itens temporariamente na memória do navegador
function adicionarAoCarrinho() {
    const nome = document.getElementById('prodNome').value;
    const preco = parseFloat(document.getElementById('prodPreco').value);
    const quantidade = parseInt(document.getElementById('prodQtd').value);

    if (!nome || isNaN(preco)) return alert("Preencha os dados corretamente!");

    carrinho.push({ nome, preco, quantidade });
    atualizarInterfaceCarrinho();
    
    // Limpa campos
    document.getElementById('prodNome').value = '';
    document.getElementById('prodPreco').value = '';
}

function atualizarInterfaceCarrinho() {
    const lista = document.getElementById('listaCarrinho');
    lista.innerHTML = carrinho.map((item, index) => 
        `<li>${item.quantidade}x ${item.nome} - R$ ${item.preco.toFixed(2)}</li>`
    ).join('');
    
    document.getElementById('btnFinalizar').style.display = carrinho.length > 0 ? 'block' : 'none';
}

// 2. Envia os dados para o Backend (POST)
async function enviarPedido() {
    try {
        const response = await fetch(API_URL, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ itens: carrinho })
        });

        const pedidoCriado = await response.json();
        
        // Abre o link do WhatsApp gerado pelo Backend (Pattern Observer/Service)
        if (pedidoCriado.whatsappLink) {
            window.open(pedidoCriado.whatsappLink, '_blank');
        }

        alert(`Pedido ${pedidoCriado.id} realizado com sucesso!`);
        carrinho = [];
        atualizarInterfaceCarrinho();
        listarPedidos(); // Atualiza a lista geral
    } catch (error) {
        console.error("Erro ao enviar pedido:", error);
    }
}

// 3. Lista pedidos do JSON (GET)
async function listarPedidos() {
    const container = document.getElementById('listaPedidos');
    try {
        const response = await fetch(API_URL);
        const pedidos = await response.json();

        if (pedidos.length === 0) {
            container.innerHTML = "<p>Nenhum pedido encontrado.</p>";
            return;
        }

        container.innerHTML = pedidos.reverse().map(p => `
            <div class="pedido-card">
                <strong>ID: ${p.id}</strong> <span class="badge">R$ ${p.total.toFixed(2)}</span>
                <ul>
                    ${p.itens.map(i => `<li>${i.quantidade}x ${i.produto.nome}</li>`).join('')}
                </ul>
                <small>Clique para reenviar:</small>
                <a href="${p.whatsappLink}" target="_blank">WhatsApp</a>
            </div>
        `).join('');
    } catch (error) {
        container.innerHTML = "Erro ao carregar pedidos.";
    }
}

// Inicialização
listarPedidos();