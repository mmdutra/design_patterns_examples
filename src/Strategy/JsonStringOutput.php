<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Strategy;

class JsonStringOutput implements OutputInterface
{
    public function load($data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }
}