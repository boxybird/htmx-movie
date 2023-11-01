<?php

use Leaf\Blade;

function view(): Blade
{
    $blade = new Blade();
    $blade->configure(__DIR__ . '/../app/views/', __DIR__ . '/../cache/views/');

    return $blade;
}

function is_htmx_request(): bool
{
    return isset($_SERVER['HTTP_HX_REQUEST']);
}
