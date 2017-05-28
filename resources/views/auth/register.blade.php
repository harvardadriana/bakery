@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Register
    
@endsection

@push('head')

    <link href="/css/auth/register.css" rel="stylesheet" />
    <link href="/css/auth/auth.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>

        <div class="form-wrapper">
            
            <h1>Register</h1>

            <form id='myForm' method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <ul>
                    <li>
                        <label for="name">&#42;Name &#40;letters&#124;spaces&#41; @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                        <input type="text" pattern="[a-zA-Z\s]+" name="name" id="name" maxlength="255" value="{{ old('name') }}" required autofocus />
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
                        <label for="street">* Street &#40;letters&#124;numbers&#124;spaces&#41; @if($errors->has('street'))<span class="required">{{ $errors->first('street') }}</span>@endif</label>
                        <input type="text" pattern="[a-zA-Z0-9\s]+" name="street" id="street" minlength="1" value="{{ old('street') }}" required />
                    </li>

                    <li>
                        <label for='state'>* Select state</label>

                        <select name="state_id" id="states">
                            @foreach($statesForDropdown as $state_id => $state_name)
                                <option value='{{ $state_id }}' >{{ $state_name }}</option>
                            @endforeach
                        </select>
                    </li>

                    <li>
                        <label for="zip">* Zip &#40;5 digits&#41;@if($errors->has('zip'))<span class="required">{{ $errors->first('zip') }}</span>@endif</label>
                        <input type="text" pattern="\d{5}" name="zip" id="zip" maxlength="5" value="{{ old('zip') }}" required />
                    </li>

                    <li id="subscribe">
                        <p>Would you like to subscribe to our newsletter?</p> 
                        <input type="radio" name="subscribe" id="yes" value="yes" checked {{ ('subscribe' == 'yes') ? 'CHECKED' : '' }} />
                        <label for="yes">Yes</label>
                        <input type="radio" name="subscribe" id="no" value="no" {{ ('subscribe' == 'no') ? 'CHECKED' : '' }} />
                        <label for="no">No</label>
                    </li>
                    
                </ul>

                <p class="infoMessage">* Required fields</p>

                <button type="submit">Register</button>

            </form>

        </div>

    </main>

@endsection