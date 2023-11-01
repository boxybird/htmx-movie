<div class="mt-16 px-4 md:px-0">
    <div>
        <a
            class="block pb-2 text-xs text-zinc-500 tracking-wider uppercase"
            href="https://htmx.org/attributes/hx-target/"
            target="_blank">
            hx-target
        </a>
        <span>
            {{ count($movies) }} results
        </span>
        <h2 class="text-3xl">
            Movie Lister
        </h2>
    </div>
    <div class="mb-24 mt-12">
        <div class="flex items-center space-x-4">
            <a 
                class="pb-2 text-xs text-zinc-500 tracking-wider uppercase"
                href="https://htmx.org/attributes/hx-target/"
                target="_blank">
                hx-target
            </a>
            <a 
                class="pb-2 text-xs text-zinc-500 tracking-wider uppercase"
                href="https://htmx.org/extensions/class-tools/"
                target="_blank">
                hx-ext="class-tools"
            </a>
        </div>
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3 3xl:grid-cols-4">
            @foreach ($movies as $movie)
                @php $delay = $loop->index * 100 @endphp
                @include('partials.movie-card', ['delay' => $delay])
            @endforeach
        </div>
    </div>
</div>