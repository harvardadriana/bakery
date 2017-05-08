@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Reset
    
@endsection

@push('head')

    <link href="/css/login.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>

        @if (session('status'))
            {{ session('status') }}
        @endif

        <div id="form-wrapper">
            <h1>Reset your passwod</h1>

            <form id='myForm' method="POST" action="{{ route('password.request') }}">

                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}" />

                <ul>
                    <li>
                        <label for="email">E-mail @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                        <input type="email" name="email" id="email" maxlength="90" value="{{ $email or old('email') }}" required autofocus />
                    </li> 

                    <li>
                        <label for="password">Password @if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                        <input type="password" name="password" id="password" maxlength="10" required />
                    </li>  

                    <li>
                        <label for="password-confirm">Password @if($errors->has('password_confirmation'))<span class="required">{{ $errors->first('password_confirmation') }}</span>@endif</label>
                        <input type="password" name="password_confirmation" id="password-confirm" maxlength="10" value="{{ $email or old('email') }}" required />
                    </li>

                    <li>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember">Remember Me</label>
                    </li>

                </ul>

                <button type="submit">Reset Password</button>

            </form>

            <p>New to Piece of Heaven Bakery&#63; Register <a href='/register'>here</a></p>
            <p><a href="/password/reset">Oh no, I forgot my password&#33;</a></p><br />

        </div>
    </main>

@endsection
