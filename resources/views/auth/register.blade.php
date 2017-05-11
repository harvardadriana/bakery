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
                            <option value='alabama' {{ ('state' == 'alabama')  ? 'SELECTED' : '' }} >Alabama</option>
                            <option value='alaska' {{ ('state' == 'alaska')  ? 'SELECTED' : '' }} >Alaska</option>
                            <option value='arizona' {{ ('state' == 'arizona')  ? 'SELECTED' : '' }} >Arizona</option>
                            <option value='arkansas' {{ ('state' == 'arkansas')  ? 'SELECTED' : '' }} >Arkansas</option>
                            <option value='california' {{ ('state' == 'california')  ? 'SELECTED' : '' }} >California</option>
                            <option value='colorado' {{ ('state' == 'colorado')  ? 'SELECTED' : '' }} >Colorado</option>
                            <option value='connecticut' {{ ('state' == 'connecticut')  ? 'SELECTED' : '' }} >Connecticut</option>
                            <option value='delaware' {{ ('state' == 'delaware')  ? 'SELECTED' : '' }} >Delaware</option>
                            <option value='florida' {{ ('state'  == 'florida') ? 'SELECTED' : '' }} >Florida</option>
                            <option value='georgia' {{ ('state' == 'georgia')  ? 'SELECTED' : '' }} >Georgia</option>
                            <option value='hawaii' {{ ('state'  == 'hawaii') ? 'SELECTED' : '' }} >Hawaii</option>
                            <option value='idaho' {{ ('state' == 'idaho')  ? 'SELECTED' : '' }} >Idaho</option>
                            <option value='illinois' {{ ('state' == 'illinois')  ? 'SELECTED' : '' }} >Illinois</option>
                            <option value='indiana' {{ ('state' == 'indiana')  ? 'SELECTED' : '' }} >Indiana</option>
                            <option value='iowa' {{ ('state' == 'iowa')  ? 'SELECTED' : '' }} >Iowa</option>
                            <option value='kansas' {{ ('state' == 'kansas')  ? 'SELECTED' : '' }} >Kansas</option>
                            <option value='kentucky' {{ ('state' == 'kentucky')  ? 'SELECTED' : '' }} >Kentucky</option>
                            <option value='louisiana' {{ ('state' == 'louisiana')  ? 'SELECTED' : '' }} >Louisiana</option>
                            <option value='maine' {{ ('state' == 'maine')  ? 'SELECTED' : '' }} >Maine</option>
                            <option value='maryland' {{ ('state' == 'maryland')  ? 'SELECTED' : '' }} >Maryland</option>
                            <option value='massachusetts' {{ ('state'  == 'massachusetts') ? 'SELECTED' : '' }} >Massachusetts</option>
                            <option value='michigan' {{ ('state' == 'michigan')  ? 'SELECTED' : '' }} >Michigan</option>
                            <option value='minnesota' {{ ('state' == 'minnesota')  ? 'SELECTED' : '' }} >Minnesota</option>
                            <option value='mississippi' {{ ('state' == 'mississippi')  ? 'SELECTED' : '' }} >Mississippi</option>
                            <option value='missouri' {{ ('state'  == 'missouri') ? 'SELECTED' : '' }} >Missouri</option>
                            <option value='montana' {{ ('state' == 'montana')  ? 'SELECTED' : '' }} >Montana</option>
                            <option value='nebraska' {{ ('state' == 'nebraska')  ? 'SELECTED' : '' }} >Nebraska</option>
                            <option value='nevada' {{ ('state' == 'nevada')  ? 'SELECTED' : '' }} >Nevada</option>
                            <option value='newhampshire' {{ ('state'  == 'newhampshire') ? 'SELECTED' : '' }} >New Hampshire</option>
                            <option value='newjersey' {{ ('state' == 'newjersey')  ? 'SELECTED' : '' }} >New Jersey</option>
                            <option value='newmexico' {{ ('state' == 'newmexico')  ? 'SELECTED' : '' }} >New Mexico</option>
                            <option value='newyork' {{ ('state' == 'newyork')  ? 'SELECTED' : '' }} >New York</option>
                            <option value='northcarolina' {{ ('state' == 'northcarolina')  ? 'SELECTED' : '' }} >North Carolina</option>
                            <option value='northdakota' {{ ('state' == 'northdakota')  ? 'SELECTED' : '' }} >North Dakota</option>
                            <option value='ohio' {{ ('state' == 'ohio')  ? 'SELECTED' : '' }} >Ohio</option>
                            <option value='oklahoma' {{ ('state' == 'oklahoma')  ? 'SELECTED' : '' }} >Oklahoma</option>
                            <option value='oregon' {{ ('state' == 'oregon')  ? 'SELECTED' : '' }} >Oregon</option>
                            <option value='pennsylvania' {{ ('state' == 'pennsylvania')  ? 'SELECTED' : '' }} >Pennsylvania</option>
                            <option value='rhodeisland' {{ ('state' == 'rhodeisland')  ? 'SELECTED' : '' }} >Rhode Island</option>
                            <option value='southcarolina' {{ ('state' == 'southcarolina')  ? 'SELECTED' : '' }} >South Carolina</option>
                            <option value='southdakota' {{ ('state' == 'southdakota')  ? 'SELECTED' : '' }} >South Dakota</option>
                            <option value='tennessee' {{ ('state' == 'tennessee')  ? 'SELECTED' : '' }} >Tennessee</option>
                            <option value='utah' {{ ('state' == 'utah')  ? 'SELECTED' : '' }} >Utah</option>
                            <option value='vermont' {{ ('state' == 'vermont')  ? 'SELECTED' : '' }} >Vermont</option>
                            <option value='virgina' {{ ('state' == 'virgina')  ? 'SELECTED' : '' }} >Virgina</option>
                            <option value='washington' {{ ('state' == 'washington')  ? 'SELECTED' : '' }} >Washington</option>
                            <option value='westvirginia' {{ ('state' == 'westvirginia')  ? 'SELECTED' : '' }} >West Virginia</option>
                            <option value='wisconsin' {{ ('state' == 'wisconsin')  ? 'SELECTED' : '' }} >Wisconsin</option>
                            <option value='wyoming' {{ ('state' == 'wyoming')  ? 'SELECTED' : '' }} >Wyoming</option>
                        </select>
                    </li>

                    <li>
                        <label for="zip">* Zip @if($errors->has('zip'))<span class="required">{{ $errors->first('zip') }}</span>@endif</label>
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