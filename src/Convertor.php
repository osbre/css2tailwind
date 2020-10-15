<?php

namespace CSS2Tailwind;

use DiDom\Document;
use Pelago\Emogrifier\CssInliner;

final class Convertor
{
    private string $css;

    private string $html;


    public function __construct(string $css, string $html)
    {
        $this->css  = $css;
        $this->html = $html;
    }

    public function convert()
    {
        $inlineHTML = CssInliner::fromHtml($this->html)->inlineCss($this->css)->render();

        $document = new Document();
        $document = $document->loadHtml($inlineHTML);
        $body     = $document->first('body');

        foreach ($body->children() as $element) {
            $style = $element->attr('style');
            $classNames = '';

            $properties = PropertiesParser::parse($style);

            foreach ($properties as $property) {
                $convertor = new PropertyConvertor($property);
                $className = $convertor->convert();

                $classNames .= " $className";
            }
            $element->setAttribute('class', trim($classNames));
            $element->removeAttribute('style');
        }

        return $body->html();
    }
}