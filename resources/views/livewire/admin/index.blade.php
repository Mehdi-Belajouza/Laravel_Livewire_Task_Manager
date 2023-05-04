@extends('layouts.app')
@extends('components.admin-sidenav')
@extends('components.admin-usernav')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Here you can manage all the site's content and settings.</p>

    <div class="row">
        <div class="col-md-6">
            <h2>Users</h2>
            <p>Manage the site's users</p>
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Manage Users</a>
        </div>

        <div class="col-md-6">
            <h2>Tasks</h2>
            <p>Manage the site's tasks </p>
            {{-- <a href="{{ route('admin.tasks.index') }}" class="btn btn-primary">Manage Tasks</a> --}}
        </div>
    </div>
@endsection
