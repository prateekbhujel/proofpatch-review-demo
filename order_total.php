<?php

declare(strict_types=1);

function orderTotal(int $unitPrice, int $quantity): int
{
    if ($quantity <= 0) {
        return 0;
    }

    return $unitPrice * $quantity;
}
