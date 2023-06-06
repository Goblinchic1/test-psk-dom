<?php

declare(strict_types=1);

namespace App\Services\JsonParser;

use App\Services\JsonParser\Enums\Elements;

use stdClass;

class JsonParser
{
    private stdClass $json;

    public function __construct(string $text)
    {
        $this->json = json_decode($text);
    }


    public function getHtml(): string
    {
        $element = Elements::from($this->json->type)->new($this->json);

        return $element->render();
    }
}