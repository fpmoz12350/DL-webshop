<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">

    <a class="navbar-brand" href="{{ route('welcome') }}"> 
      <a class="navbar-brand" href="{{ route('welcome') }}">     
        <img src="https://scontent.ftzl2-1.fna.fbcdn.net/v/t1.15752-9/150787135_708231369849355_7450508749503465806_n.png?_nc_cat=102&ccb=3&_nc_sid=ae9488&_nc_eui2=AeGogRF4FEQNpOIHBVKZtiIGeQThYdObudB5BOFh05u50DR7yg_IzAGGx7r6f8rPJ0EOnC4bwcSRXpFwzB6ykjU_&_nc_ohc=M_EnraRRrnsAX9l6QI7&_nc_ht=scontent.ftzl2-1.fna&oh=aa9d5a66999579593832cb8edfd2a848&oe=6051DBB8" style="max-width:120px" alt="LOGO">
        </a>

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
                          <a class="dropdown-item" href="{{ route('profile', Auth::user()->id) }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil
                          </a>
                          <hr/>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if (Auth::user()->hasRole(['administrator', 'moderator', 'radnik-na-pakiranju']))
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
        </ul>
      </div>
    </div>
  </nav>