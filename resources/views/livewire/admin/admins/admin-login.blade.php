@extends('layouts.app')
@extends('components.admin-nav')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center">
                    <img src="/images/admin.png" class="img-fluid mb-4" alt="Logo">
                </div>
                <h2 class="card-title text-center mb-4">{{ __('Admin Login') }}</h2>

                <form wire:submit.prevent="login" method="POST" action="{{ route('admin.admins.admin-login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input wire:model.lazy="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input wire:model.lazy="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group form-check">
                        <input wire:model.lazy="remember" type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                    </div>

                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a> --}}
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #f5f5f5;
    }

    .card {
        margin-top: 60px;
    }
</style>
@endsection
