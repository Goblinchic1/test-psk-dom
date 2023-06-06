<?php

declare(strict_types=1);

namespace App\Services\JsonParser\Entities;

final class Block extends Element
{
    public function render(): string
    {
        $html = '<div ' . $this->getParameters() .  '>';

        $html .= $this->renderChildren();

        $html .= '</div>';

        return $html;
    }
}