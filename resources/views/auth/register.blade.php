@extends('auth.layout.master')

@section('title')
    Register
@endsection


@section('content')
    <div class="logo-container">
        <h1>Create account</h1>
    </div>
    <form action="{{ route('auth.store') }}" method="POST" autocomplete="off">
        @csrf
        <div class="form-input @error('name'){{ 'error' }}@enderror">
            <input type="text" name="name" id="name" placeholder="Enter your full name" value="{{ old('name') }}" />
            @error('name')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-input @error('email'){{ 'error' }}@enderror">
            <input type="text" name="email" id="email" placeholder="Enter your email"
                value="{{ old('email') }}" />
            @error('email')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-input @error('password'){{ 'error' }}@enderror">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            @error('password')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-input @error('password_confirmation'){{ 'error' }}@enderror">
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Enter Confirm Password">
            @error('password_confirmation')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Create account</button>
        </div>

        <div class="form-footer">
            <span>Already have an account?</span>
            <a href="{{ route('auth.login') }}">Login</a>
        </div>
    </form>
@endsection
