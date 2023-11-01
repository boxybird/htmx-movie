<article 
    hx-get="/movie/{{ $movie['id'] }}/details"
    hx-trigger="click"
    hx-target="#movie-detail"
    classes="add in:{{ $delay ?? 0 }}ms"
    class="fade group rounded-xl bg-gradient-to-tr from-zinc-900 via-zinc-800 to-zinc-700 px-4 py-4 ring-2 ring-inset ring-zinc-100 ring-opacity-30 duration-300 hover:ring-opacity-60">
    <div class="overflow-hidden relative">
        <img 
            class="w-full object-cover shadow-xl duration-300 group-hover:scale-[1.03]"
            src="{{ $movie['poster'] }}" 
            alt="{{ $movie['title'] }} poster" 
            loading="lazy">
        <button 
            class="absolute bg-cyan-700 duration-300 grid h-6 left-2 place-content-center opacity-40 rounded-full top-2 w-6 hover:scale-[1.10] group-hover:opacity-100"
            aria-label="open movie details">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 -960 960 960" width="16" fill="currentColor">
                <path d="M172-292v-28h438v28H172Zm596-35L613-480l155-152 20 20-135 132 135 133-20 20ZM172-466v-28h326v28H172Zm0-174v-28h438v28H172Z" />
            </svg>
        </button>
    </div>
    <div class="px-2">
        <div class="mt-3">
            <h2 class="flex justify-between text-xs font-medium tracking-wider">
                <span>{{ $movie['title'] }}</span>
            </h2>
        </div>
    </div>
</article>