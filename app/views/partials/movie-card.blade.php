<article 
    hx-get="/movie/{{ $movie['id'] }}/details"
    hx-trigger="click"
    hx-target="#movie-detail"
    classes="add in:{{ $delay ?? 0 }}ms"
    class="slide-up group rounded-xl bg-gradient-to-tr cursor-pointer from-zinc-900 via-zinc-800 to-zinc-700 px-4 pt-4 pb-6 ring-2 ring-inset ring-zinc-100 ring-opacity-30 duration-300 hover:ring-opacity-60">
    <div class="overflow-hidden relative">
        <img 
            class="aspect-[6/9] w-full object-cover shadow-xl duration-300 group-hover:scale-[1.03]"
            src="{{ $movie['poster'] }}" 
            alt="{{ $movie['title'] }} poster" 
            loading="lazy">
        <button 
            class="absolute bg-cyan-700 duration-300 grid h-8 left-4 place-content-center opacity-40 rounded-full top-4 w-8 hover:scale-[1.10] group-hover:opacity-100"
            aria-label="open movie details">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor">
                <path d="M172-292v-28h438v28H172Zm596-35L613-480l155-152 20 20-135 132 135 133-20 20ZM172-466v-28h326v28H172Zm0-174v-28h438v28H172Z" />
            </svg>
        </button>
    </div>
    <div class="px-2">
        <div class="mt-4">
            <h2 class="flex justify-between font-medium tracking-wider">
                <span>{{ $movie['title'] }}</span>
            </h2>
        </div>
        <div class="mt-2 flex items-center justify-between border-y-2 border-zinc-900 border-opacity-30 py-2">
            <div class="flex items-center -ml-1 space-x-1">
                <svg class="h-5 w-5 cursor-pointer text-zinc-600 duration-150 hover:text-zinc-400" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor">
                    <path d="M600-240q-33 0-56.5-23.5T520-320q0-33 23.5-56.5T600-400q33 0 56.5 23.5T680-320q0 33-23.5 56.5T600-240ZM232-132q-26 0-43-17t-17-43v-496q0-26 17-43t43-17h80v-92h32v92h276v-92h28v92h80q26 0 43 17t17 43v496q0 26-17 43t-43 17H232Zm0-28h496q12 0 22-10t10-22v-336H200v336q0 12 10 22t22 10Zm-32-396h560v-132q0-12-10-22t-22-10H232q-12 0-22 10t-10 22v132Zm0 0v-164 164Z"/>
                </svg>
                <span class="text-sm tracking-wider">
                    {{ $movie['details']['Release Date'] }}
                </span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                class="h-4 w-4 cursor-pointer text-zinc-600 duration-150 hover:text-zinc-400">
                <path fill-rule="evenodd"
                    d="M19 10.5a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zM8.25 9.75A.75.75 0 019 9h.253a1.75 1.75 0 011.709 2.13l-.46 2.066a.25.25 0 00.245.304H11a.75.75 0 010 1.5h-.253a1.75 1.75 0 01-1.709-2.13l.46-2.066a.25.25 0 00-.245-.304H9a.75.75 0 01-.75-.75zM10 7a1 1 0 100-2 1 1 0 000 2z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <p class="line-clamp-3 mt-3 text-sm text-zinc-300">{{ $movie['description'] }}</p>
    </div>
</article>