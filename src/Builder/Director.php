<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Builder;

use Mateusdutra\DesignPatterns\Builder\Vehicles\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}