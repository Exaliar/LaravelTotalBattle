<nav class="navbar navbar-expand-lg color-mine navbar-dark shadow">
    <div class="container">
        <a class="m-auto navbar-brand" href="{{ route('home.index') }}">
            <img class="logo" src="{{ asset('/storage/logo-min.jpg') }}" alt="Home">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link{{ request()->is('home') ? ' active' : '' }}" href="{{ route('home.index') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link{{ request()->is('calculator') ? ' active' : '' }}" href="{{ route('calculator') }}">Calculator<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link{{ request()->is('forum*') ? ' active' : '' }}" href="{{ route('forum') }}">Forum<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}">About<span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link {{ request()->is('login') ? ' active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link {{ request()->is('register') ? ' active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link {{ request()->is('profile') ? ' active' : '' }}" href="{{ route('profile') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="m-auto pr-4 font-inconsolata ml-4 h5 nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
