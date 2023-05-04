@extends('layouts.app')
@extends('components.admin-usernav')
@section('content')
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.users.create') }}">Create new user</a>
    <h1>Searching for user</h1>
    <form method="GET" action="{{ route('admin.users.search') }}">
        <input type="text" name="search_term" placeholder="Search for users...">
        <button type="submit">Search</button>
    </form>

@endsection

