<?php

require_once "vendor/autoload.php";

use App\Http\Controllers\MainController;

const APPLICATION = __DIR__;

$controller = new MainController();

$controller->index();