<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Builder;

use Mateusdutra\DesignPatterns\Builder\Parts\Door;
use Mateusdutra\DesignPatterns\Builder\Parts\Engine;
use Mateusdutra\DesignPatterns\Builder\Parts\Wheel;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Car;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors(): void
    {
        $this->car
            ->setPart('rightDoor', new Door())
            ->setPart('leftDoor', new Door())
            ->setPart('trunkLid', new Door());
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel(): void
    {
        $this->car
            ->setPart('wheelLF', new Wheel())
            ->setPart('wheelRF', new Wheel())
            ->setPart('wheelLR', new Wheel())
            ->setPart('wheelRR', new Wheel());
    }

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}