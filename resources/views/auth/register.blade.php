@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Register
    
@endsection

@push('head')

    <link href="/css/login.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>

        <div id="form-wrapper">
            
            <h1>Register</h1>

            <form id='myForm' method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <ul>
                    <li>
                        <label for="name">&#42;Name @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                        <input type="text" name="name" id="name" maxlength="150" value="{{ old('name') }}"  autofocus />
                    </li>                            

                    <li>
                        <label for="email">&#42;Email @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                        <input type="email" name="email" id="email" maxlength="90" value="{{ old('email') }}"  />
                    </li> 

                    <li>
                        <label for="password">&#42;Password @if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                        <input type="password" name="password" id="password" maxlength="10"  />
                    </li>

                    <li>
                        <label for="password-confirm">&#42;Retype password <span class="required"></span></label>
                        <input type="password" name="password_confirmation" id="password-confirm" maxlength="10"  />
                    </li>
<!--
                    <li>
                        <label for="address">Address @if($errors->has('address'))<span class="required">{{ $errors->first('address') }}</span>@endif</label>
                        <input type="address" name="address" id="address" maxlength="90" class="required address" value="{{ old('address') }}" required />
                    </li>   -->
                </ul>

                <p class="infoMessage">* Required fields</p>

                <button type="submit">Register</button>

            </form>

        </div>

    </main>

@endsection