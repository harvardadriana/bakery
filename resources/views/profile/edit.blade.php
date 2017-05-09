@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Edit Profile
    
@endsection

@push('head')

    <link href="/css/auth.css" rel="stylesheet" />
    <link href="/css/register.css" rel="stylesheet" />
    
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
                        <label for="name">&#42;Name @if($errors->has('name'))<span class="required">{{ $errors->first('name') }}</span>@endif</label>
                        <input type="text" name="name" id="name" maxlength="255" value="{{ old('name', $user->name) }}" required autofocus />
                    </li> 

                    <li>
                        <label for="street">* Street @if($errors->has('street'))<span class="required">{{ $errors->first('street') }}</span>@endif</label>
                        <input type="text" name="street" id="street" minlength="1" value="{{ old('street', $user->street) }}" required />
                    </li>

                    <li>
                        <label for='state'>* Select state</label>
                        <select name="state" id="state">
                            <option value='california' {{ ($user->state == 'california')  ? 'SELECTED' : '' }} >California</option>
                            <option value='florida' {{ ($user->state == 'florida') ? 'SELECTED' : '' }} >Florida</option>
                            <option value='hawaii' {{ ($user->state == 'hawaii') ? 'SELECTED' : '' }} >Hawaii</option>
                            <option value='massachusetts' {{ ($user->state == 'massachusetts') ? 'SELECTED' : '' }} >Massachusetts</option>
                        </select>
                    </li>

                    <li>
                        <label for="zip">* Zip @if($errors->has('zip'))<span class="required">{{ $errors->first('zip') }}</span>@endif</label>
                        <input type="number" name="zip" id="zip" maxlength="5" value="{{ old('zip', $user->zip) }}" required />
                    </li>

                    <legend>Would you like to subscribe to our newsletter?</legend><br />
                    <label><input type="radio" name="subscribe" value="yes" checked {{ ($user->subscribe == 'yes') ? 'CHECKED' : '' }} />Yes</label>
                    <label><input type="radio" name="subscribe" value="no" {{ ($user->subscribe == 'no') ? 'CHECKED' : '' }} />No</label>

                </ul>

                <p class="infoMessage">* Required fields</p>

                <button type="submit">Make changes</button>

            </form>

        </div>

    </main>

@endsection