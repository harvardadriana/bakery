@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Login
    
@endsection

@push('head')

    <link href="/css/auth.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        <div class="form-wrapper">
            <h1>Login</h1>

            <form id='myForm' method="POST" action="/login">

                {{ csrf_field() }}

                <ul>
                    <li>
                        <label for="email">E-mail @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                        <input type="email" name="email" id="email" maxlength="255" value="{{ old('email') }}" required autofocus />
                    </li> 

                    <li>
                        <label for="password">Password @if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                        <input type="password" name="password" id="password" maxlength="20" required />
                    </li>  
                  
                    <li>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember" id="rememberMe">Remember Me</label>
                    </li>

                </ul>

                <button type="submit">Login</button>

            </form>

            <p>New to Piece of Heaven Bakery&#63; Register <a href='/register'>here</a></p>
            <p><a href="/password/reset">Oh no, I forgot my password&#33;</a></p><br />

        </div>
    </main>

@endsection
