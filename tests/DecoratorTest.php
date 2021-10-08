<?php

declare(strict_types=1);

namespace Mateusdutra\Tests;

use Mateusdutra\DesignPatterns\Decorator\DoubleRoomBooking;
use Mateusdutra\DesignPatterns\Decorator\ExtraBed;
use Mateusdutra\DesignPatterns\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /** @test */
    public function should_calculate_price_for_basic_double_room_booking()
    {
        $booking = new DoubleRoomBooking();

        self::assertEquals(
            40,
            $booking->calculatePrice()
        );
    }

    /** @test */
    public function should_calculate_price_for_double_room_booking_with_wifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);

        self::assertEquals(
            50,
            $booking->calculatePrice()
        );
        self::assertEquals(
            'double room with wifi',
            $booking->getDescription()
        );
    }

    /** @test */
    public function should_calculate_price_for_double_room_booking_with_wifi_and_extrabed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        self::assertEquals(
            80,
            $booking->calculatePrice()
        );
        self::assertEquals(
            'double room with wifi with extra bed',
            $booking->getDescription()
        );
    }
}