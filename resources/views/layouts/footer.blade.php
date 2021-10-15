<section class="footer-main color-second-text">
    <div class="container">
        <div class="justify-content-md-center row">
            <div class="col">
                <h1 class="font-inconsolata color-second-text text-center mb-5 mt-5">Kategorie</h1>
                <div class="container">
                    {{-- <div class="col">
                        <a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a>
                        <a href="#" class="nav-link"><i class="fas fa-calculator"></i> Calculator</a>
                        <a href="#" class="nav-link"><i class="fas fa-comments"></i> Forum</a>
                        <a href="#" class="nav-link"><i class="fas fa-info row"></i> About</a>
                    </div> --}}
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="m-auto pr-4 ml-4 h5 nav-link{{ request()->is('home') ? ' active' : '' }}" href="{{ route('home.index') }}"><i class="fas fa-home footer-menu-icon" aria-hidden="true"></i>
                                Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="m-auto pr-4 ml-4 h5 nav-link{{ request()->is('calculator') ? ' active' : '' }}" href="{{ route('calculator') }}"><i class="fas fa-calculator footer-menu-icon"
                                    aria-hidden="true"></i>
                                Calculator<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="m-auto pr-4 ml-4 h5 nav-link{{ request()->is('forum*') ? ' active' : '' }}" href="{{ route('forum') }}"><i class="fas fa-comments footer-menu-icon" aria-hidden="true"></i>
                                Forum<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="m-auto pr-4 ml-4 h5 nav-link{{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}"><i class="fas fa-info footer-menu-icon" aria-hidden="true"></i> About<span
                                    class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contact-us col">
                <h1 class="font-inconsolata color-second-text text-center mb-5 mt-5">Połączmy siły</h1>
                <form action="#" class="emai-button" method="post">
                    <input type="email" class="input-text-contact font-size-20" name="contact_placeholder-email" id="contact_placeholder-email" placeholder="Wpisz maila tutaj...">
                    <input type="submit" class="input-button-contact font-size-20" id="contact_button-email" value="Wyslij">
                </form>
            </div>
            <div class="col">
                <h1 class="font-inconsolata color-second-text text-center mb-5 mt-5">Kontakt</h1>
                <div class="social-icon-footer row justify-content-md-center">
                    <a href="#" tittle="Facebook"><i class="col fab fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#" tittle="Messenger"><i class="col fab fa-facebook-messenger" aria-hidden="true"></i></a>
                    <a href="#" tittle="Instagram"><i class="col fab fa-instagram-square" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center" style="color: white">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</section>
@livewireScripts
