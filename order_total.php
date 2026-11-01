<?php

declare(strict_types=1);

function orderTotal(int $unitPrice, int $quantity): int
{
    return intdiv($unitPrice, $quantity);
}
