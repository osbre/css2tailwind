<?php

namespace CSS2Tailwind\Tests;

use CSS2Tailwind\ConvertorFactory;
use PHPUnit\Framework\TestCase;

final class ConvertorTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     * @param $css
     * @param $html
     * @param $expected
     */
    public function test_it_can_convert_properties($css, $html, $expected): void
    {
        $this->assertEquals(
            $expected,
            ConvertorFactory::make($css, $html)->convert()
        );
    }

    public function dataProvider(): iterable
    {
        yield [
            'css' => <<<CSS
.container {
    justify-content: space-between;
}
CSS,
            'html' => <<<HTML
<div class="container">
    <span>Good</span>
    <span>Good</span>
    <span>Good</span>
</div>
HTML,
            'expected' => <<<HTML
<body><div class="justify-between">
    <span>Good</span>
    <span>Good</span>
    <span>Good</span>
</div></body>
HTML
        ];
    }
}