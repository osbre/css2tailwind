<?php

namespace CSS2Tailwind;

final class Property
{
    public string $name;
    public string $value;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}