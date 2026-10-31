<?php
declare(strict_types=1);

function orderTotal(array $items): int
{
    $total = 0;
    foreach ($items as $item) {
        $price = (int) ($item['price'] ?? 0);
        $qty = (int) ($item['quantity'] ?? 0);
        if ($price <= 0 || $qty <= 0) {
            continue;
        }
        $total += $price * $qty;
    }
    return $total;
}
