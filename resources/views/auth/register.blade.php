@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Register
    
@endsection

@push('head')

    <link href="/css/auth.css" rel="stylesheet" />
    <link href="/css/register.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>

        <div class="form-wrapper">
            
            <h1>Register</h1>

            <form id='myForm' method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <ul>
                    <li>
                        <label for="name">&#42;Name @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                        <input type="text" name="name" id="name" maxlength="255" value="{{ old('name') }}" required autofocus />
                    </li>                            

                    <li>
                        <label for="email">&#42;Email @if($errors->has('email'))<span class="required">{{ $errors->first('email') }}</span>@endif</label>
                        <input type="email" name="email" id="email" maxlength="255" value="{{ old('email') }}" required />
                    </li> 

                    <li>
                        <label for="password">&#42;Password &#40;min: 6 &#41; @if($errors->has('password'))<span class="required">{{ $errors->first('password') }}</span>@endif</label>
                        <input type="password" name="password" id="password" required />
                    </li>

                    <li>
                        <label for="password-confirm">&#42;Retype password <span class="required"></span></label>
                        <input type="password" name="password_confirmation" id="password-confirm" required />
                    </li>

                    <li>
                        <label for="street">* Street @if($errors->has('street'))<span class="required">{{ $errors->first('street') }}</span>@endif</label>
                        <input type="text" name="street" id="street" minlength="1" value="{{ old('street') }}" required />
                    </li>

                    <li>
                        <label for='state'>* Select state</label>
                        <select name="state" id="state">
                            <option value='california' {{ ('state' == 'california')  ? 'SELECTED' : '' }} >California</option>
                            <option value='florida' {{ ('state'  == 'florida') ? 'SELECTED' : '' }} >Florida</option>
                            <option value='hawaii' {{ ('state'  == 'hawaii') ? 'SELECTED' : '' }} >Hawaii</option>
                            <option value='massachusetts' {{ ('state'  == 'massachusetts') ? 'SELECTED' : '' }} >Massachusetts</option>
                        </select>
                    </li>

                    <li>
                        <label for="zip">* Zip @if($errors->has('zip'))<span class="required">{{ $errors->first('zip') }}</span>@endif</label>
                        <input type="number" name="zip" id="zip" maxlength="5" value="{{ old('zip') }}" required />
                    </li>

                    <legend>Would you like to subscribe to our newsletter?</legend><br />
                    <label><input type="radio" name="subscribe" value="yes" checked {{ ('subscribe' == 'yes') ? 'CHECKED' : '' }} />Yes</label>
                    <label><input type="radio" name="subscribe" value="no" {{ ('subscribe' == 'no') ? 'CHECKED' : '' }} />No</label>

                </ul>

                <p class="infoMessage">* Required fields</p>

                <button type="submit">Register</button>

            </form>

        </div>

    </main>

@endsection