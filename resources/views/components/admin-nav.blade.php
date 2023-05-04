@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <a class="navbar-brand" href="{{ route('home') }}">Administrator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('home') }}">HomePage</a>
            </li>
            @auth('admin')
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('admin.users.create') }}">Add User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('admin.users.index') }}">Users</a>
            </li>
            <li class="nav-item">
                <span class="navbar-text AdminName">ADMIN_NAME: {{ Auth::guard('admin')->user()->name }}</span>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout-admin') }}">
                    @csrf
                    <button type="submit" class="btn btn-link nav-link">{{ __('Logout') }}</button>
                </form>
            </li>
            @endauth
        </ul>
    </div>
    <!-- Add the jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Add the Bootstrap JavaScript files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</nav>
@section('content')
