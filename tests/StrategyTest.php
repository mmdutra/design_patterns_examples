<?php

declare(strict_types=1);

namespace Mateusdutra\Tests;

use Mateusdutra\DesignPatterns\Strategy\Client;
use Mateusdutra\DesignPatterns\Strategy\JsonStringOutput;
use Mateusdutra\DesignPatterns\Strategy\SerializedArrayOutput;
use Mateusdutra\DesignPatterns\Strategy\XmlOutput;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    public function should_create_a_json_output()
    {
        $client = new Client(new JsonStringOutput());

        self::assertJson(
            '{"test":"test"}',
            $client->execute()
        );
    }

    /** @test */
    public function should_create_a_serialized_output()
    {
        $client = new Client(new SerializedArrayOutput());

        self::assertEquals(
            'a:1:{s:4:"test";s:4:"test";}',
            $client->execute()
        );
    }

    /** @test */
    public function should_create_a_xml_output()
    {
        $client = new Client(new XmlOutput());

        self::assertStringContainsString(
            '<?xml version="1.0"?>',
            $client->execute()
        );
    }
}