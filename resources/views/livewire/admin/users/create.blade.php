@extends('layouts.app')
@section('content')
@extends('components.admin-nav')
    <h1>Create User</h1>
    <form method="POST" action="{{ route('admin.users.store') }}" class="form">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection

