@extends('layouts.app')

@section('title', 'Register')

@section('content')
        <h3>Register:</h3>
        <form action="/register/user" method="POST">
                @csrf
                <div>
                        <label for="name">Name</label>
                        <input class="@error('name') is-invalid @enderror" name="name" id="name">
                        @error('name')
                                <div>{{ $message }}</div>
                        @enderror
                </div>
                <div>
                        <label for="email">Email</label>
                        <input class="@error('email') is-invalid @enderror" type="email" name="email" id="email">
                        @error('email')
                                <div>{{ $message }}</div>
                        @enderror
                </div>
                <div>
                        <label for="password">Password</label>
                        <input class="@error('password') is-invalid @enderror" type="password" name="password" id="password">
                        @error('password')
                                <div>{{ $message }}</div>
                        @enderror
                </div>
                <div>
                        <label for="confirm_password">Confirm Password</label>
                        <input class="@error('confirm_password') is-invalid @enderror" type="password" name="confirm_password" id="confirm_password">
                        @error('confirm_password')
                                <div>{{ $message }}</div>
                        @enderror
                </div>
                <button type="submit">Register</button>
        </form>
@endsection