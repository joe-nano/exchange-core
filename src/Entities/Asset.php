<?php

namespace Hydraex\Exchange\Entities;

class Asset implements \Hydraex\Exchange\Interfaces\Entities\Asset
{
    private $code;
    private $name;

    public function __construct(string $code, string $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

    public function getCode() : string
    {
        return $this->code;
    }

    public function getName() : string
    {
        return $this->name;
    }
}