<?php

namespace CSS2Tailwind;

class Properties
{
    public const STATIC = [
        'justify-content' => [
            'space-between' => 'justify-between',
            'flex-start'    => 'justify-start',
            'flex-end'      => 'justify-end',
            'center'        => 'justify-center',
        ],
    ];

    public const DYNAMIC = [
        'font-size',
    ];

    public static function isStatic(string $name): bool
    {
        return isset(self::STATIC[$name]);
    }

    public static function getStatic(string $name, string $value): ?string
    {
        return self::STATIC[$name][$value] ?? null;
    }
}
