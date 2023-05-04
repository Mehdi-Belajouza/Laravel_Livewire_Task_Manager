<style>
    .navbar-text.username {
        position: absolute;
        right: 40px;
    }

    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-nav">
        <a class="navbar-brand" href="{{ route('home') }}">HomePage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Search</a>
                </li> --}}
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                </li>
                    <li class="nav-item ">
                        <span class="navbar-text username">Welcome, {{ Auth::user()->name }}</span>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users">Admin</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
