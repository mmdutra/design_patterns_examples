<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Decorator;

interface Booking
{
    public function calculatePrice(): int;
    public function getDescription(): string;
}