@extends('layout')

@section('content')
    <div class="gap-16 grid grid-cols-1 min-h-screen md:grid-cols-[250px_1fr] md:pr-8 lg:grid-cols-[250px_1fr_150px]">
        <section id="movie-detail">
            @include('partials.movie-details', ['movie' => $movies[0] ?? null])
        </section>
        <section id="movie-grid" class="row-start-1 md:row-start-auto">
            @include('partials.movie-grid', ['movies' => $movies])
        </section>
        <aside class="hidden my-8 lg:block">
            @include('partials.movie-sse')
        </aside>
    </div>
@endsection
