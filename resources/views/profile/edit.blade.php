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
                        <select name="state" id="state">
                            <option value='alabama' {{ ($user->state == 'alabama')  ? 'SELECTED' : '' }} >Alabama</option>
                            <option value='alaska' {{ ($user->state == 'alaska')  ? 'SELECTED' : '' }} >Alaska</option>
                            <option value='arizona' {{ ($user->state == 'arizona')  ? 'SELECTED' : '' }} >Arizona</option>
                            <option value='arkansas' {{ ($user->state == 'arkansas')  ? 'SELECTED' : '' }} >Arkansas</option>
                            <option value='california' {{ ($user->state == 'california')  ? 'SELECTED' : '' }} >California</option>
                            <option value='colorado' {{ ($user->state == 'colorado')  ? 'SELECTED' : '' }} >Colorado</option>
                            <option value='connecticut' {{ ($user->state == 'connecticut')  ? 'SELECTED' : '' }} >Connecticut</option>
                            <option value='delaware' {{ ($user->state == 'delaware')  ? 'SELECTED' : '' }} >Delaware</option>                      
                            <option value='florida' {{ ($user->state == 'florida') ? 'SELECTED' : '' }} >Florida</option>
                            <option value='georgia' {{ ($user->state == 'georgia')  ? 'SELECTED' : '' }} >Georgia</option>
                            <option value='hawaii' {{ ($user->state  == 'hawaii') ? 'SELECTED' : '' }} >Hawaii</option>
                            <option value='idaho' {{ ($user->state == 'idaho')  ? 'SELECTED' : '' }} >Idaho</option>
                            <option value='illinois' {{ ($user->state == 'illinois')  ? 'SELECTED' : '' }} >Illinois</option>
                            <option value='indiana' {{ ($user->state == 'indiana')  ? 'SELECTED' : '' }} >Indiana</option>
                            <option value='iowa' {{ ($user->state == 'iowa')  ? 'SELECTED' : '' }} >Iowa</option>
                            <option value='kansas' {{ ($user->state == 'kansas')  ? 'SELECTED' : '' }} >Kansas</option>
                            <option value='kentucky' {{ ($user->state == 'kentucky')  ? 'SELECTED' : '' }} >Kentucky</option>
                            <option value='louisiana' {{ ($user->state == 'louisiana')  ? 'SELECTED' : '' }} >Louisiana</option>
                            <option value='maine' {{ ($user->state == 'maine')  ? 'SELECTED' : '' }} >Maine</option>
                            <option value='maryland' {{ ($user->state == 'maryland')  ? 'SELECTED' : '' }} >Maryland</option>
                            <option value='massachusetts' {{ ($user->state  == 'massachusetts') ? 'SELECTED' : '' }} >Massachusetts</option>
                            <option value='michigan' {{ ($user->state == 'michigan')  ? 'SELECTED' : '' }} >Michigan</option>
                            <option value='minnesota' {{ ($user->state == 'minnesota')  ? 'SELECTED' : '' }} >Minnesota</option>
                            <option value='mississippi' {{ ($user->state == 'mississippi')  ? 'SELECTED' : '' }} >Mississippi</option>
                            <option value='missouri' {{ ($user->state  == 'missouri') ? 'SELECTED' : '' }} >Missouri</option>
                            <option value='montana' {{ ($user->state == 'montana')  ? 'SELECTED' : '' }} >Montana</option>
                            <option value='nebraska' {{ ($user->state == 'nebraska')  ? 'SELECTED' : '' }} >Nebraska</option>
                            <option value='nevada' {{ ($user->state == 'nevada')  ? 'SELECTED' : '' }} >Nevada</option>
                            <option value='newhampshire' {{ ($user->state  == 'newhampshire') ? 'SELECTED' : '' }} >New Hampshire</option>
                            <option value='newjersey' {{ ($user->state == 'newjersey')  ? 'SELECTED' : '' }} >New Jersey</option>
                            <option value='newmexico' {{ ($user->state == 'newmexico')  ? 'SELECTED' : '' }} >New Mexico</option>
                            <option value='newyork' {{ ($user->state == 'newyork')  ? 'SELECTED' : '' }} >New York</option>
                            <option value='northcarolina' {{ ($user->state == 'northcarolina')  ? 'SELECTED' : '' }} >North Carolina</option>
                            <option value='northdakota' {{ ($user->state == 'northdakota')  ? 'SELECTED' : '' }} >North Dakota</option>
                            <option value='ohio' {{ ($user->state == 'ohio')  ? 'SELECTED' : '' }} >Ohio</option>
                            <option value='oklahoma' {{ ($user->state == 'oklahoma')  ? 'SELECTED' : '' }} >Oklahoma</option>
                            <option value='oregon' {{ ($user->state == 'oregon')  ? 'SELECTED' : '' }} >Oregon</option>
                            <option value='pennsylvania' {{ ($user->state == 'pennsylvania')  ? 'SELECTED' : '' }} >Pennsylvania</option>
                            <option value='rhodeisland' {{ ($user->state == 'rhodeisland')  ? 'SELECTED' : '' }} >Rhode Island</option>
                            <option value='southcarolina' {{ ($user->state == 'southcarolina')  ? 'SELECTED' : '' }} >South Carolina</option>
                            <option value='southdakota' {{ ($user->state == 'southdakota')  ? 'SELECTED' : '' }} >South Dakota</option>
                            <option value='tennessee' {{ ($user->state == 'tennessee')  ? 'SELECTED' : '' }} >Tennessee</option>
                            <option value='utah' {{ ($user->state == 'utah')  ? 'SELECTED' : '' }} >Utah</option>
                            <option value='vermont' {{ ($user->state == 'vermont')  ? 'SELECTED' : '' }} >Vermont</option>
                            <option value='virgina' {{ ($user->state == 'virgina')  ? 'SELECTED' : '' }} >Virgina</option>
                            <option value='washington' {{ ($user->state == 'washington')  ? 'SELECTED' : '' }} >Washington</option>
                            <option value='westvirginia' {{ ($user->state == 'westvirginia')  ? 'SELECTED' : '' }} >West Virginia</option>
                            <option value='wisconsin' {{ ($user->state == 'wisconsin')  ? 'SELECTED' : '' }} >Wisconsin</option>
                            <option value='wyoming' {{ ($user->state == 'wyoming')  ? 'SELECTED' : '' }} >Wyoming</option>
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