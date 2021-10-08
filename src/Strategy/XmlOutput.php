<?php

declare(strict_types=1);

namespace Mateusdutra\DesignPatterns\Strategy;

class XmlOutput implements OutputInterface
{

    public function load(array $data): string
    {
        $xml = new \SimpleXMLElement('<root/>');
        array_walk_recursive($data, array ($xml, 'addChild'));

        return $xml->asXML();
    }
}