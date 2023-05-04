@extends('layouts.app')

@section('content')
    @if($user)
        <h1>{{ $user->name }}'s Profile</h1>
        <p>Email: {{ $user->email }}</p>
        <!-- Add more fields here, such as profile picture, bio, etc. -->
    @else
        <p>User not found.</p>
    @endif
  <!-- Add more fields here, such as profile picture, bio, etc. -->
@endsection
