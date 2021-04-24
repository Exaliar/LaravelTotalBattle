<nav class="navbar navbar-expand-md main-color shadow">
    <div class="container">
        <a class="m-auto" href="{{ route('home.index') }}">
            <img class="logo" src="{{ url('/storage/logo-min.jpg') }}" alt="Home">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link{{ request()->is('calculator/old') ? ' active' : '' }}" href="{{ route('calculator.old.index') }}">Calculator Old<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link{{ request()->is('calculator/new') ? ' active' : '' }}" href="{{ route('calculator.new') }}">Calculator New<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link{{ request()->is('forum*') ? ' active' : '' }}" href="{{ route('forum') }}">Forum<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}">About<span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link {{ request()->is('login') ? ' active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link {{ request()->is('register') ? ' active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link {{ request()->is('profile') ? ' active' : '' }}" href="{{ route('profile') }}">
                        {{ Auth::user()->name }}
                    </a>
                    <a class="m-auto pr-5 font-inconsolata ml-4 h5 nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
