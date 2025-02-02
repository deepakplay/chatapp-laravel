@extends('auth.layout.master')

@section('title')
    Login
@endsection


@section('content')
    <form action="{{ route('auth.attempt') }}" method="POST">
        @csrf
        <div class="form-input @error('email'){{ 'error' }}@enderror">
            <input type="text" name="email" id="email" placeholder="Enter the Email" />
            @error('email')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-input @error('password'){{ 'error' }}@enderror">
            <input type="password" name="password" id="password" placeholder="Enter the Password">
            @error('password')
                <span class="error-msg">{{ $message }} </span>
            @enderror
        </div>

        <div class="form-options">
            <span class="form-input-rememberme">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </span>

            <a href="#">Forget Password?</a>
        </div>


        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Sign in</button>
        </div>

        <div class="form-footer">
            <span>Don't have an account yet?</span>
            <a href="{{ route('auth.register') }}">Create account</a>
        </div>
    </form>
@endsection
