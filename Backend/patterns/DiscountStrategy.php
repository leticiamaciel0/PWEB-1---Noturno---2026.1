<?php
interface DiscountStrategy {
    public function apply(float $total): float;
}

class NoDiscount implements DiscountStrategy {
    public function apply(float $total): float { return $total; }
}

class ChristmasDiscount implements DiscountStrategy {
    public function apply(float $total): float { return $total * 0.90; } // 10% OFF
}