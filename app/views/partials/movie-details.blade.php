<div class="h-screen overflow-y-scroll bg-gradient-to-br border-r border-zinc-900 border-opacity-30 from-zinc-900 sticky to-zinc-800 top-0">
    @isset($movie)
        <div class="pb-16 pt-6 space-y-1">
            <a 
                class="pb-2 px-6 text-xs text-zinc-500 tracking-wider uppercase"
                href="https://htmx.org/attributes/hx-target/"
                target="_blank">
                hx-target
            </a>
            <p 
                classes="add in:0ms" 
                class="slide-right border-b-2 border-zinc-900 border-opacity-30 pb-4 px-6 text-lg">
                {{ $movie['title'] }}
            </p>
            @foreach ($movie['details'] as $label => $detail)
                @php $delay = ($loop->index + 1) * 50 @endphp

                @empty($detail)
                    @continue
                @endempty

                <div 
                    classes="add in:{{ $delay ?? 0 }}ms" 
                    class="slide-right p-2 pr-4 space-y-1">
                    <span class="px-4 text-xs text-zinc-500 tracking-wider uppercase">{{ $label }}</span>
                    <p class="bg-zinc-900 px-4 py-2 text-sm tracking-wider break-words">{{ $detail }}</p>
                </div>
            @endforeach
        </div>
    @endisset
</div>
@isset($movie)
    <div 
        classes="add in:0ms"
        class="fade fixed h-screen left-0 top-0 pointer-events-none w-full -z-10">
        <img 
            class="object-cover !opacity-5 blur-sm h-full w-full"
            src="{{ $movie['poster'] }}"
            alt="background image"
            aria-hidden="true">
    </div>
@endisset