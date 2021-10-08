<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Builder;

use Mateusdutra\DesignPatterns\Builder\Parts\Door;
use Mateusdutra\DesignPatterns\Builder\Parts\Engine;
use Mateusdutra\DesignPatterns\Builder\Parts\Wheel;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Truck;
use Mateusdutra\DesignPatterns\Builder\Vehicles\Vehicle;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors(): void
    {
        $this->truck
            ->setPart('rightDoor', new Door())
            ->setPart('leftDoor', new Door());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel(): void
    {
        $this->truck
            ->setPart('wheel1', new Wheel())
            ->setPart('wheel2', new Wheel())
            ->setPart('wheel3', new Wheel())
            ->setPart('wheel4', new Wheel())
            ->setPart('wheel5', new Wheel())
            ->setPart('wheel6', new Wheel());
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}