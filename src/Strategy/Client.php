<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Strategy;

class Client
{
    public function __construct(private OutputInterface $output)
    {
    }

    public function execute()
    {
        $data = ['test' => 'test'];

        return $this->output->load($data);
    }
}