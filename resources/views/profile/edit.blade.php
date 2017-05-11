@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Edit Profile
    
@endsection

@push('head')

    <link href="/css/profile/edit.css" rel="stylesheet" />
    <link href="/css/auth/auth.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
    
        <div class="form-wrapper">
            
            <h1>Edit Profile</h1>

            <form id='myForm' method='POST' action='/profile/edit'>

                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $user->id }}"> 

                <ul>
                    <li>
                        <label for="name">&#42;Name &#40;letters&#124;spaces&#41; @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                        <input type="text" pattern="[a-zA-Z\s]+" name="name" id="name" maxlength="255" value="{{ old('name', $user->name) }}" required autofocus />
                    </li> 

                    <li>
                        <label for="street">* Street &#40;letters&#124;numbers&#124;spaces&#41; @if($errors->has('street'))<span class="required">{{ $errors->first('street') }}</span>@endif</label>
                        <input type="text" pattern="[a-zA-Z0-9\s]+" name="street" id="street" minlength="1" value="{{ old('street', $user->street) }}" required />
                    </li>

                    <li>
                        <label for='state'>* Select state</label>
                        <select name="state" id="states">
                            @foreach($statesForDropdown as $state)
                                <option value='{{ $state }}' {{ ($user->state == $state )  ? 'SELECTED' : '' }} >{{ $state }}</option>
                            @endforeach
                        </select>
                    </li>

                    <li>
                        <label for="zip">* Zip @if($errors->has('zip'))<span class="required">{{ $errors->first('zip') }}</span>@endif</label>
                        <input type="text" pattern="\d{5}" name="zip" id="zip" maxlength="5" value="{{ old('zip', $user->zip) }}" required />
                    </li>
                  
                    <li id="subscribe">
                        <p>Would you like to subscribe to our newsletter?</p> 
                        <input type="radio" name="subscribe" id="yes" value="yes" checked {{ ($user->subscribe == 'yes') ? 'CHECKED' : '' }} />
                        <label for="yes">Yes</label>
                        <input type="radio" name="subscribe" id="no" value="no" {{ ($user->subscribe == 'no') ? 'CHECKED' : '' }} />
                        <label for="no">No</label>
                    </li>
                </ul>

                <p class="infoMessage">* Required fields</p>

                <button type="submit">Make changes</button>

            </form>

        </div>

    </main>

@endsection