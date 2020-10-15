<?php

namespace CSS2Tailwind;

class PropertiesParser
{
    const CSS_PROPERTIES_DELIMITER = ';';

    public static function parse(string $properties)
    {
        // As each property has ";" symbol we can split by that.
        $properties = explode(self::CSS_PROPERTIES_DELIMITER, $properties);
        // Exclude empty values
        $properties = array_filter($properties);

        // Map each property-string into Property class
        return array_map(fn($property) => PropertyFactory::makeFromString($property), $properties);
    }
}