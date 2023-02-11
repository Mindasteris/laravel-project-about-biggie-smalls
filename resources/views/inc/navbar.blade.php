<nav class="bg-black text-white p-8">

    <div class="hidden lg:flex items-center gap-8">
            {{-- Logo --}}
            <a href="{{ url('/') }}">
                <img src="{{ asset('pictures/logo.png') }}" alt="big-logo" class="w-96 hover:scale-110 transition duration-700">
            </a>

        {{-- Desktop Menu --}}
        <div class="flex items-center justify-between w-full">
            <!-- Left Side Of Navbar -->
            <ul class="flex gap-8 p-4 text-xl menu-links">
                <li><a href="/">HOME</a></li>
                <li><a href="{{ route('mystory') }}">MY STORY</a></li>
                <li><a href="{{ route('music') }}">DISCOGRAPHY</a></li>
                <li><a href="{{ route('community.index') }}">COMMUNITY</a></li>
                <li><a href="{{ route('contactUs') }}">CONTACT</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="flex gap-8 mr-4 text-xl p-4 menu-links">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Join Us') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    
    {{-- Mobile Menu --}}
    <div class="flex lg:hidden">
        {{-- Logo --}}
        <div class="flex justify-between items-center w-full">
            <a href="{{ url('/') }}">
                <img src="{{ asset('pictures/logo.png') }}" alt="big-logo" class="w-60">
            </a>

            {{-- Mobile --}}
            <div>
                <button onclick="hideMenuIcon();" class="mobile-menu-button" id="menu"><img src="{{ asset('pictures/menu.svg') }}" alt="menu-open"></button>
                <button onclick="hideCloseIcon();" class="mobile-menu-close hidden" id="close"><img src="{{ asset('pictures/close.svg') }}" alt="close-open"></button>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation Links --}}
    <div class="hidden mobile-menu mobile-close menu-links">
        <ul class="mt-4 space-y-4 text-xl">
            <li><a href="/">HOME</a></li>
            <li><a href="{{ route('mystory') }}">MY STORY</a></li>
            <li><a href="{{ route('music') }}">DISCOGRAPHY</a></li>
            <li><a href="{{ route('community.index') }}">COMMUNITY</a></li>
            <li><a href="{{ route('contactUs') }}">CONTACT</a></li>
        </ul>

        <hr class="my-4 border border-yellow-200">

        {{-- Auth Links --}}
        <ul class="mt-4 space-y-4 text-xl ml-8">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Join Us') }}</a>
                    </li>
                @endif
            @else
                <li>
                    <a href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    
    {{-- Script JS --}}
    {{-- Script --}}
    <script>
        // Mobile Menu
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
        const btnCloseMenu = document.querySelector("button.mobile-menu-close");
        const closeMenuX = document.querySelector(".mobile-close");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        btnCloseMenu.addEventListener("click", () => {
            closeMenuX.classList.toggle("hidden");
        });
        
        // Hard Coded Mobile Menu Close
        function hideMenuIcon()
        {
            hamIcon = document.getElementById("menu");
            hamIcon.style.display = 'none';

            closeIcon = document.getElementById("close");
            closeIcon.style.display = 'block';
        }

        function hideCloseIcon()
        {
            hamIcon = document.getElementById("menu");
            hamIcon.style.display = 'block';

            closeIcon = document.getElementById("close");
            closeIcon.style.display = 'none';
        }
    </script>  
</nav>