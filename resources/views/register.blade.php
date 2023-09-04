@extends('layouts.master')
@section('title' , 'Register Page')
@section('content')
    <div class="login-form">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Username @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
            </div>

            <div class="form-group">
                <label>Email Address @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Phone @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="number" name="phone" placeholder="09xxxx">
            </div>
            <div class="form-group">
                <label>Address @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label>Password @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Password @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
                <input class="au-input au-input--full" type="password" name="password_confirmation"
                    placeholder="Confirm Password">
            </div>

            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>

        </form>
        <div class="register-link">
            <p>
                Already have account?
                <a href="{{ route('auth#loginPage') }}">Sign In</a>
            </p>
        </div>
    </div>
@endsection
