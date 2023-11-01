<?php

namespace App\Models;

use RedBeanPHP\R;

class Movie
{
    public static function all(): array
    {
        $instance = new static;

        return array_map(function ($movie) use ($instance) {
            return $instance->format($movie);
        }, R::getAll('SELECT * FROM movie'));
    }

    public static function find(int $id): array
    {
        $instance = new static;

        $movie = R::getRow('SELECT * FROM movie WHERE id = ?', [$id]);

        if (!$movie) {
            return [];
        }

        return $instance->format($movie);
    }

    public static function search(string $search): array
    {
        $instance = new static;

        return array_map(function ($movie) use ($instance) {
            return $instance->format($movie);
        }, R::getAll('SELECT * FROM movie WHERE title LIKE ?', ['%' . $search . '%']));
    }

    public static function random(int $count = 5): array
    {
        $instance = new static;

        return array_map(function ($movie) use ($instance) {
            return $instance->format($movie);
        }, R::getAll('SELECT * FROM movie ORDER BY RAND() LIMIT ?', [$count]));
    }

    protected function format(array $movie): array
    {
        return [
            'id'          => $movie['id'],
            'title'       => $movie['title'],
            'slug'        => $movie['slug'],
            'description' => $movie['description'],
            'poster'      => $_ENV['APP_URL'] . '/posters/' . $movie['poster'],
            'details'     => json_decode($movie['details'], true),
        ];
    }
}
