@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Register
    
@endsection

@push('head')

    <link href="/css/register.css" rel="stylesheet" />
    
@endpush

@section('main')
    <main>

        <div id="form-wrapper">
            
            <h1>Bakery - Register</h1>

            <form id='registerform' method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <p>* Required fields</p>

                <fieldset>
                    <ul>
                        <li>
                            <label for="name">Name @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                            <input type="text" name="name" id="name" maxlength="150" class="required name" value="{{ old('name') }}" required />
                        </li>                            

                        <li>
                            <label for="email">Email @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                            <input type="email" name="email" id="email" maxlength="90" class="required email" value="{{ old('email') }}" required />
                        </li> 

                        <li>
                            <label for="password">Password &#40;Minimum of 6 characters&#41;@if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                            <input type="password" name="password" id="password" maxlength="10" class="required" value="{{ old('password') }}" required />
                        </li>

                        <li>
                            <label for="password-confirm">Retype password <span class="required"></span></label>
                            <input type="password" name="password_confirmation" id="password-confirm" maxlength="10" class="required" value="{{ old('password-confirm') }}" required />
                        </li>
<!--
                        <li>
                            <label for="address">Address @if($errors->has('address'))<span class="required">{{ $errors->first('address') }}</span>@endif</label>
                            <input type="address" name="address" id="address" maxlength="90" class="required address" value="{{ old('address') }}" required />
                        </li>   -->
                    </ul>
                </fieldset>

                <p><input type="submit" name="register" class="register" value="Register" /></p>

            </form>
        </div>
    </main>

@endsection