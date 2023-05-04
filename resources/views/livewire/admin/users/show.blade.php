@extends('components.admin-nav')
@section('content')
    @if(count($users) > 0)
        <h1>Users</h1>
        <ul>
            @foreach($users->take(100) as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
        @if(count($users) > 100)
            <p>Showing first 100 results.</p>
        @endif
    @else
        <p>No users found.</p>
        <a href="{{ route('admin.users.create') }}">Create user</a>
    @endif
@endsection
