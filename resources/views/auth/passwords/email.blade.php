@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Email
    
@endsection

@push('head')

    <link href="/css/auth/login.css" rel="stylesheet" />
    <link href="/css/auth/auth.css" rel="stylesheet" />
    
@endpush

@section('main')

    @if (session('status'))
        {{ session('status') }}
    @endif

     <main>

        <div class="form-wrapper">

            <h1>Reset your passwod</h1>

            <form id='myForm' method="POST" action="{{ route('password.email') }}">

                {{ csrf_field() }}

                <ul>
                    <li>
                        <label for="email">E-mail Address @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label><br/>
                        <input type="email" name="email" id="email" maxlength="90" value="{{ old('email') }}" required />
                    </li> 
                </ul>

                <button type="submit">Send Password Reset Link</button>

            </form>

        </div>

    </main>

@endsection
