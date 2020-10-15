<?php

namespace CSS2Tailwind;

final class ConvertorFactory
{
    public static function make(...$arguments): Convertor
    {
        return new Convertor(...$arguments);
    }
}