<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists('storage_path')) {
    function storage_path($file = ''): string
    {
        return APPLICATION . "/resources/storage/$file";
    }
}

if (!function_exists('dd')) {
    #[NoReturn] function dd(mixed $variable): void
    {
        echo '<style>body {background-color: #000; color: #FFF}</style>';
        echo '<pre>';
        print_r($variable);
        echo '</pre>';
        die();
    }
}

if (!function_exists('dump')) {
    #[NoReturn] function dump(mixed $variable): void
    {
        echo '<style>body {background-color: #000; color: #FFF}</style>';
        echo '<pre>';
        print_r($variable);
        echo '</pre>';
    }
}

if (!function_exists('camelToKebabCase')) {
    function camelToKebabCase(string $input): string
    {
        return ltrim(
            strtolower(
                preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '-$0', $input)
            ), '-'
        );
    }
}