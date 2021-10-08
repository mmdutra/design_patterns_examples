<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Decorator;

abstract class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking)
    {
    }
}