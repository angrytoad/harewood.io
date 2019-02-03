<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ route('welcome') }}">
        <img src="{{ asset('/svg/logo_small.svg') }}" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto align-items-center">
            @auth
                <li class="nav-item ml-2 mr-0 {{ active('admin') }}">
                    <a class="nav-link" href="{{ route('admin') }}">
                        <button class="btn text-light" type="submit">ADMIN</button>
                    </a>
                </li>
                <li class="nav-item ml-2 mr-0 {{ active('get-in-touch') }}">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"
                    >
                        <button class="btn text-light" type="submit">Logout</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth

            @guest
                <li class="nav-item mx-2 {{ active('welcome') }}">
                    <a class="nav-link" href="{{ route('welcome') }}">Harewood Studios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-2 mr-0 {{ active('get-in-touch') }}">
                    <a class="nav-link" href="{{ route('get-in-touch') }}">
                        <button class="btn text-light" type="submit">Get in Touch</button>
                    </a>
                </li>
            @endguest

        </ul>
    </div>
</nav>