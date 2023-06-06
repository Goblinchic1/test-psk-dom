<?php

declare(strict_types=1);

namespace App\Services\JsonParser\Entities;

final class Button extends Element
{
    public function render(): string
    {
        $html = '<button href="'
            . $this->element->payload->link->payload
            . '" '
            . $this->getParameters()
            . '>';

        $html .= $this->element->payload->link->payload;

        $html .= '</button>';

        return $html;
    }
}