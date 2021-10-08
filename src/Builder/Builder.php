<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Builder;

use Mateusdutra\DesignPatterns\Builder\Vehicles\Vehicle;

interface Builder
{
    public function createVehicle(): void;
    public function addWheel(): void;
    public function addEngine(): void;
    public function AddDoors(): void;
    public function getVehicle(): Vehicle;
}