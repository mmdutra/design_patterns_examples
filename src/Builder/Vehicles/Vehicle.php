<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Builder\Vehicles;

abstract class Vehicle
{
    public function setPart(string $key, object $value): self
    {
        return $this;
    }
}