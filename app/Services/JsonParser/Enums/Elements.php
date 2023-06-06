<?php

namespace App\Services\JsonParser\Enums;

use App\Services\JsonParser\Entities\Block;
use App\Services\JsonParser\Entities\Button;
use App\Services\JsonParser\Entities\Container;
use App\Services\JsonParser\Entities\Element;
use App\Services\JsonParser\Entities\Image;
use App\Services\JsonParser\Entities\Text;

enum Elements: string
{
    case Container = 'container';
    case Block = 'block';
    case Text = 'text';
    case Image = 'image';
    case Button = 'button';


    public function new(object $element): Element
    {
        return match ($this) {
            Elements::Container => new Container($element),
            Elements::Block => new Block($element),
            Elements::Text => new Text($element),
            Elements::Image => new Image($element),
            Elements::Button => new Button($element),
        };
    }
}
