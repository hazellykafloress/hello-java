<header class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full shadow bg-blue-500 text-white py-6">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold focus:outline-none focus:opacity-80" href="#"
                aria-label="Brand">
                <span class="inline-flex items-center gap-x-2 text-xl font-semibold' }}">
                    {{-- {{ env('APP_NAME', 'TIS') }} --}}
                    MALITBOG TOURISM
                </span>
            </a>
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle relative size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none "
                    id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
        </div>
        <div id="hs-navbar-example"
            class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block"
            aria-labelledby="hs-navbar-example-collapse">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                @foreach ($navbarItems as $navbarItem)
                    <x-nav-link name="{{ $navbarItem->name }}" routeName="{{ $navbarItem->routeName }}"
                        extraClass="{{ $navbarItem->extraClass }}" />
                @endforeach

                @guest
                    <x-nav-link name="Login" routeName="login" extraClass='text-black' />
                @endguest

                {{-- @auth
                    <x-nav-link name="Logout" routeName="logout" extraClass='text-black' />
                @endauth --}}

            </div>
        </div>
    </nav>
</header>
