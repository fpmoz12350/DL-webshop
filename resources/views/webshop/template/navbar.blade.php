<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="{{ route('welcome') }}"> <strong>D&L webshop </strong></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Prijava</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registracija</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if (Auth::user()->hasRole('administrator'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('home') }}" target="_blank">Administracija</a>
                    </li>
                @endif
                @endguest
              
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shop') }}">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-1" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
          </li>
        <!--
          <li class="nav-item">
            <a class="nav-link" href="about.html">O nama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Kontakt</a>
          </li>
          -->
        </ul>
      </div>
    </div>
  </nav>