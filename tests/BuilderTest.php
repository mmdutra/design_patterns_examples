<?php

declare(strict_types=1);

namespace Mateusdutra\Tests;

use Mateusdutra\DesignPatterns\Builder\CarBuilder;
use Mateusdutra\DesignPatterns\Builder\Director;
use Mateusdutra\DesignPatterns\Builder\TruckBuilder;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Car;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Truck;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /** @test */
    public function should_create_truck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        self::assertInstanceOf(Truck::class, $newVehicle);
    }

    /** @test */
    public function should_create_car()
    {
        $truckBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        self::assertInstanceOf(Car::class, $newVehicle);
    }
}