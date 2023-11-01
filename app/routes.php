<?php

use App\Models\Inxss;
use App\Models\Movie;

/**
 * This route is verbose (gross) on purpose to demonstrate
 * the path of the request through the application.
 */
app()->get('/', function () {
    // Attempted XSS attack.
    // Hit the monster with a stick and log an INXSS event
    if (preg_match('/<script.*?>|<\/script>/i', $_GET['s'] ?? '')) {

        // If it's an HTMX request, let's return the partials.
        if (is_htmx_request()) {
            Inxss::increment();

            echo view()->render('partials.inxss');
            echo view()->render('partials.inxss-count');
        
            return;
        }

        // If it's not an HTMX request, redirect to the homepage.
        return response()->redirect('/');
    }

    // Looks like it's not an XSS attack, so let's continue...

    // Let's set a possible search term.
    $search = isset($_GET['s']) ? trim($_GET['s']) : '';

    // If it is a search, let's search for movies. Else, let's get all movies.
    $movies = $search ? Movie::search($search) : Movie::all();

    // If it's an HTMX request, let's return the partials.
    // After all, we don't want to return the entire page. That would be silly.
    if (is_htmx_request()) {
        if (!empty($movies)) {
            echo view()->render('partials.movie-grid', compact('movies'));
            echo view()->render('partials.movie-results-count', ['count' => count($movies)]);
        } else {
            echo view()->render('partials.movie-grid-no-results');
        }

        return;
    }

    // If it's not an HTMX request, let's return the entire page.
    echo view()->render('index', compact('movies'));
});

app()->get('/movie/{id}/details', function ($id) {
    $movie = Movie::find($id);

    // If it's not an HTMX request, buzz off.
    // This endpoint is only for HTMX requests.
    if (!is_htmx_request()) {
        return;
    }
    
    // If it's an HTMX request, let's return the partials.
    echo view()->render('partials.movie-details', [
        'movie' => $movie,
    ]);
});

/**
 * My first attempt at Server-Sent Events.
 * Not sure if this is the best way to do it, but it works.
 */
app()->get('/sse/stream', function () {
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    header('Connection: keep-alive');

    $sleep = 10;

    $loops = 0;

    while (true) {
        $movies = Movie::random();

        $output = '<div class="space-y-6">';

        foreach ($movies as $index => $movie) {
            $output .= '<div classes="add in:' . $index * 100 . 'ms" class="slide-left">';
            $output .= view()->render('partials.movie-card-simple', compact('movie'));
            $output .= '</div>';
        }

        $output .= '</div>';

        $string = trim(preg_replace('/\s+/', ' ', $output));

        echo "data: $string\n\n";

        ob_flush();
        flush();

        if ($loops === 0) {
            $loops++;
        } else {
            sleep($sleep);
        }
    }
});
