@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Users
          </a>
          <div class="dropdown-menu" aria-labelledby="usersDropdown">
            <a class="dropdown-item" href="{{ route('admin.users.index') }}">All Users</a>
            <a class="dropdown-item" href="{{ route('admin.users.create') }}">Create User</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="adminsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admins
          </a>
          <div class="dropdown-menu" aria-labelledby="adminsDropdown">
            {{-- <a class="dropdown-item" href="{{ route('admin.admins.index') }}">All Admins</a> --}}
            <a class="dropdown-item" href="{{ route('admin.admins.admin-create') }}">Create Admin</a>
          </div>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="{{ route('admin.admins.showProfile') }}">Profile</a> --}}
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="{{ route('admin.admins.showDashboard', Auth::id()) }}">Dashboard</a> --}}
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="{{ route('admin.admins.logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;"> --}}
              {{-- @csrf
          </form> --}}
        </li>
      </ul>
    </div>
  </nav>
  @endsection
