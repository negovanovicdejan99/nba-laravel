@extends('layouts.app')

@section('title', 'Login')

@section('content')
        <h3>Login:</h3>
        <form action="/login/user" method="POST">
                @csrf
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input  type="password" name="password" id="password">
                    </div>
                    @if($loginFailed ?? false)
                        <div>Email or password are incorrect</div>
                    @endif
                <button type="submit">Login</button>
        </form>
@endsection