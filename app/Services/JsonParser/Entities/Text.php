<?php

declare(strict_types=1);

namespace App\Services\JsonParser\Entities;

final class Text extends Element
{
    public function render(): string
    {
        $html = '<p ' . $this->getParameters() . '>';

        $html .= $this->element->payload->text;

        $html .= '</p>';

        return $html;
    }
}