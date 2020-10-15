<?php

namespace CSS2Tailwind;

final class PropertyFactory
{
    public static function makeFromString(string $property): Property
    {
        $property = trim($property, ';');

        $name = strstr($property, ':', true);
        $value = strstr($property, ':');
        $value = trim($value, ': ');

        return new Property($name, $value);
    }
}