<header class="border-b border-zinc-900 border-opacity-30 grid grid-cols-1 md:grid-cols-[250px_1fr] ">
    <div class="bg-cyan-700 hidden place-content-center md:grid">
        <div class="flex items-center mr-2 space-x-1 text-cyan-100">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor">
                <path d="M186-146v-668h28v80h132v-80h268v80h132v-80h28v668h-28v-80H614v80H346v-80H214v80h-28Zm28-108h132v-132H214v132Zm0-160h132v-132H214v132Zm0-160h132v-132H214v132Zm400 320h132v-132H614v132Zm0-160h132v-132H614v132Zm0-160h132v-132H614v132ZM374-174h212v-612H374v612Zm0-612h212-212Z" />
            </svg>
            <h1 class="font-medium uppercase tracking-wide">HTMX Movie</h1>
        </div>
    </div>
    <div class="bg-gradient-to-br flex from-cyan-700 items-center space-x-4 to-cyan-500">
        <div class="flex flex-col p-4 w-full sm:px-8">
            <a 
                class="block ml-8 text-xs text-cyan-300 tracking-wider uppercase"
                href="https://htmx.org/attributes/hx-push-url/"
                target="_blank">
                hx-push-url
            </a>
            <div class="flex items-center space-x-2">
                <svg  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="currentColor">
                    <path d="M778-164 528-414q-30 26-69 40t-77 14q-92.231 0-156.115-63.837Q162-487.675 162-579.837 162-672 225.837-736q63.838-64 156-64Q474-800 538-736.115 602-672.231 602-580q0 41-15 80t-39 66l250 250-20 20ZM382-388q81 0 136.5-55.5T574-580q0-81-55.5-136.5T382-772q-81 0-136.5 55.5T190-580q0 81 55.5 136.5T382-388Z" />
                </svg>
                <input 
                    hx-get="/"
                    hx-target="#movie-grid"
                    hx-trigger="keyup changed delay:250ms"
                    hx-push-url="true"
                    class="bg-transparent duration-500 outline-none max-w-lg py-2 ring-b-lighter w-full focus:focus-within:ring-b-light placeholder:text-white/70"
                    type="text"
                    id="search"
                    name="s"
                    value="{{ !empty($_GET['s']) ? $_GET['s'] : '' }}"
                    placeholder="Active Search" />
            </div>
        </div>
        <div class="pr-6 shrink-0 sm:pr-8">
            @include('partials.inxss-count')
        </div>
    </div>
</header>
