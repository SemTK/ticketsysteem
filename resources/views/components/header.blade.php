<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Ticketsysteem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">Over Ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">List of Events</a>
                </li>
                @if(Auth::user())
                <a class="nav-link" href="{{ route('add-event') }}">Add event</a>
                @endif
            </ul>
            
            <span class="navbar-text">
                @if(Auth::user())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link">logout</button>
                </form>
                @else
                <a href=" {{ route('register') }} ">Registreren</a>
                <a href=" {{ route('login') }}">Inloggen</a>
                @endif
            </span>
        </div>
    </div>
</nav>