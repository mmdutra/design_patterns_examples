<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Strategy;

class SerializedArrayOutput implements OutputInterface
{
    public function load($data): string
    {
        return serialize($data);
    }
}