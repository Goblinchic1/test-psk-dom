<?php

declare(strict_types=1);

namespace App\Services\JsonParser\Entities;

final class Image extends Element
{
    public function render(): string
    {
        return '<img src="'
            . $this->element->payload->image->url
            .'" '
            . $this->getParameters()
            .  '>';
    }
}