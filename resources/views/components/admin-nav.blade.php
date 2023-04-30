
  <nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <a class="navbar-brand" href="{{ route('home') }}">WikiGame Admistrator</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('home') }}">My App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('users.create') }}">Add User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link .text-light" href="{{ route('users.index') }}">Users</a>
            </li>
        </ul>
    </div>
    <!-- Add the jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Add the Bootstrap JavaScript files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

</nav>
