<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\JsonParser\JsonParser;

final class MainController
{
    public function index(): void
    {
        $json = file_get_contents(storage_path('files/data.json'));

        $jsonParser = new JsonParser($json);

        $html = $jsonParser->getHtml();

        echo $html;
    }
}