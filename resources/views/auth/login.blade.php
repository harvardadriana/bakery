@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Login
    
@endsection

@push('head')

    <link href="/css/login.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        <div id="form-wrapper">
            <h1>Login</h1>

            <form id='loginform' method="POST" action="/login">

                {{ csrf_field() }}

                <fieldset>
                    <ul>
                        <li>
                            <label for="email">E-mail @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                            <input type="email" name="email" id="email" maxlength="90" class="required email" value="{{ old('email') }}" />
                        </li> 


                        <li>
                            <label for="password">Password @if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                            <input type="password" name="password" id="password" maxlength="10" class="required" />
                        </li>  
                      
                        <li>
                            <label for="remember">Remember Me</label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        </li>

                        <p><input type="submit" name="checkUser" class="checkUser" value="Login" /></p>

                    </ul>
                </fieldset>
            </form>

            <p>New to Piece of Heaven Bakery&#63; Register <a href='/register'>here</a></p>
            <p><a href="/password/reset">Oh no, I forgot my password&#33;</a></p>

        </div>
    </main>

@endsection
