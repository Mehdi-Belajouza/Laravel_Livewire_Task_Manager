@extends('layouts.app')
@extends('components.admin-nav')
@section('content')
<h1>Edit User</h1>
<form method="POST" action="{{ route('admin.users.update', $user->id) }}" class="form">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

