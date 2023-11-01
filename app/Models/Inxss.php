<?php

namespace App\Models;

class Inxss
{
    public static function increment(): void
    {
        new static;

        $count = (int) file_get_contents(__DIR__ . '/../../cache/inxss.txt');

        $count++;

        file_put_contents(__DIR__ . '/../../cache/inxss.txt', $count);
    }

    public static function count(): int
    {
        new static;

        return (int) file_get_contents(__DIR__ . '/../../cache/inxss.txt');
    }

    public function __construct()
    {
        if (!file_exists(__DIR__ . '/../../cache/inxss.txt')) {
            file_put_contents(__DIR__ . '/../../cache/inxss.txt', '0');
        }
    }
}
