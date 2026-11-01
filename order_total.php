<?php

declare(strict_types=1);

function orderTotal(int $unitPrice, int $quantity): int
{
    return intdiv($unitPrice, $quantity);
}

function discountedTotal(int $unitPrice, int $quantity, int $percentOff): int
{
    return (int) ($unitPrice * $quantity * (100 + $percentOff) / 100);
}
