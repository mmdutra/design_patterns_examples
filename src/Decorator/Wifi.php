<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Decorator;

class Wifi extends BookingDecorator
{
    private const PRICE = 10;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}