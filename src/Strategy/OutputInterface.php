<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Strategy;

interface OutputInterface
{
    public function load(array $data): string;
}