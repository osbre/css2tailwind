<?php

namespace CSS2Tailwind;

class PropertyConvertor
{
    private Property $property;

    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    public function convert(): ?string
    {
        if (Properties::isStatic($this->property->name)) {
            return Properties::getStatic(
                $this->property->name,
                $this->property->value
            );
        }

        return null;
    }
}