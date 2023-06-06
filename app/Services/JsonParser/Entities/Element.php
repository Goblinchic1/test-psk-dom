<?php

declare(strict_types=1);

namespace App\Services\JsonParser\Entities;

use App\Services\JsonParser\Enums\Elements;

abstract class Element
{
    public function __construct(protected object $element)
    {
    }

    abstract public function render(): string;


    protected function renderChildren(): string
    {
        $html = '';
        if (isset($this->element->children)) {
            foreach ($this->element->children as $child) {
                $element = Elements::from($child->type)->new($child);
                $html .= $element->render();
            }
        }
        return $html;
    }


    protected function getParameters(): string
    {
        $parameters = '';
        $styles = '';

        if (isset($this->element->parameters)) {
            $styles = 'style=" ';

            foreach($this->element->parameters as $parameter => $value) {
                $parameters .= camelToKebabCase($parameter) . '="' . $value . '"';
                $styles .= camelToKebabCase($parameter) . ': ' . $value . ';';
            }

            $styles .= '"';
        }

        return $parameters . $styles;
    }
}