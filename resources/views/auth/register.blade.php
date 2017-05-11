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
                        <select name="state" id="state">
                            <option value='Alabama' {{ ('state' == 'Alabama')  ? 'SELECTED' : '' }} >Alabama</option>
                            <option value='Alaska' {{ ('state' == 'Alaska')  ? 'SELECTED' : '' }} >Alaska</option>
                            <option value='Arizona' {{ ('state' == 'Arizona')  ? 'SELECTED' : '' }} >Arizona</option>
                            <option value='Arkansas' {{ ('state' == 'Arkansas')  ? 'SELECTED' : '' }} >Arkansas</option>
                            <option value='California' {{ ('state' == 'California')  ? 'SELECTED' : '' }} >California</option>
                            <option value='Colorado' {{ ('state' == 'Colorado')  ? 'SELECTED' : '' }} >Colorado</option>
                            <option value='Connecticut' {{ ('state' == 'Connecticut')  ? 'SELECTED' : '' }} >Connecticut</option>
                            <option value='Delaware' {{ ('state' == 'Delaware')  ? 'SELECTED' : '' }} >Delaware</option>
                            <option value='Florida' {{ ('state'  == 'Florida') ? 'SELECTED' : '' }} >Florida</option>
                            <option value='Georgia' {{ ('state' == 'Georgia')  ? 'SELECTED' : '' }} >Georgia</option>
                            <option value='Hawaii' {{ ('state'  == 'Hawaii') ? 'SELECTED' : '' }} >Hawaii</option>
                            <option value='Idaho' {{ ('state' == 'Idaho')  ? 'SELECTED' : '' }} >Idaho</option>
                            <option value='Illinois' {{ ('state' == 'Illinois')  ? 'SELECTED' : '' }} >Illinois</option>
                            <option value='Indiana' {{ ('state' == 'Indiana')  ? 'SELECTED' : '' }} >Indiana</option>
                            <option value='Iowa' {{ ('state' == 'Iowa')  ? 'SELECTED' : '' }} >Iowa</option>
                            <option value='Kansas' {{ ('state' == 'Kansas')  ? 'SELECTED' : '' }} >Kansas</option>
                            <option value='Kentucky' {{ ('state' == 'Kentucky')  ? 'SELECTED' : '' }} >Kentucky</option>
                            <option value='Louisiana' {{ ('state' == 'Louisiana')  ? 'SELECTED' : '' }} >Louisiana</option>
                            <option value='Maine' {{ ('state' == 'Maine')  ? 'SELECTED' : '' }} >Maine</option>
                            <option value='Maryland' {{ ('state' == 'Maryland')  ? 'SELECTED' : '' }} >Maryland</option>
                            <option value='Massachusetts' {{ ('state'  == 'Massachusetts') ? 'SELECTED' : '' }} >Massachusetts</option>
                            <option value='Michigan' {{ ('state' == 'Michigan')  ? 'SELECTED' : '' }} >Michigan</option>
                            <option value='Minnesota' {{ ('state' == 'Minnesota')  ? 'SELECTED' : '' }} >Minnesota</option>
                            <option value='mississippi' {{ ('state' == 'mississippi')  ? 'SELECTED' : '' }} >Mississippi</option>
                            <option value='Missouri' {{ ('state'  == 'Missouri') ? 'SELECTED' : '' }} >Missouri</option>
                            <option value='Montana' {{ ('state' == 'Montana')  ? 'SELECTED' : '' }} >Montana</option>
                            <option value='Nebraska' {{ ('state' == 'Nebraska')  ? 'SELECTED' : '' }} >Nebraska</option>
                            <option value='Nevada' {{ ('state' == 'Nevada')  ? 'SELECTED' : '' }} >Nevada</option>
                            <option value='New Hampshire' {{ ('state'  == 'New Hampshire') ? 'SELECTED' : '' }} >New Hampshire</option>
                            <option value='New Jersey' {{ ('state' == 'New Jersey')  ? 'SELECTED' : '' }} >New Jersey</option>
                            <option value='New Mexico' {{ ('state' == 'New Mexico')  ? 'SELECTED' : '' }} >New Mexico</option>
                            <option value='New York' {{ ('state' == 'New York')  ? 'SELECTED' : '' }} >New York</option>
                            <option value='North Carolina' {{ ('state' == 'North Carolina')  ? 'SELECTED' : '' }} >North Carolina</option>
                            <option value='North Dakota' {{ ('state' == 'North Dakota')  ? 'SELECTED' : '' }} >North Dakota</option>
                            <option value='Ohio' {{ ('state' == 'Ohio')  ? 'SELECTED' : '' }} >Ohio</option>
                            <option value='Oklahoma' {{ ('state' == 'Oklahoma')  ? 'SELECTED' : '' }} >Oklahoma</option>
                            <option value='Oregon' {{ ('state' == 'Oregon')  ? 'SELECTED' : '' }} >Oregon</option>
                            <option value='Pennsylvania' {{ ('state' == 'Pennsylvania')  ? 'SELECTED' : '' }} >Pennsylvania</option>
                            <option value='Rhode Island' {{ ('state' == 'Rhode Island')  ? 'SELECTED' : '' }} >Rhode Island</option>
                            <option value='South Carolina' {{ ('state' == 'South Carolina')  ? 'SELECTED' : '' }} >South Carolina</option>
                            <option value='South Dakota' {{ ('state' == 'South Dakota')  ? 'SELECTED' : '' }} >South Dakota</option>
                            <option value='Tennessee' {{ ('state' == 'Tennessee')  ? 'SELECTED' : '' }} >Tennessee</option>
                            <option value='Texas' {{ ('state' == 'Texas')  ? 'SELECTED' : '' }} >Texas</option>
                            <option value='Utah' {{ ('state' == 'Utah')  ? 'SELECTED' : '' }} >Utah</option>
                            <option value='Vermont' {{ ('state' == 'Vermont')  ? 'SELECTED' : '' }} >Vermont</option>
                            <option value='Virgina' {{ ('state' == 'Virgina')  ? 'SELECTED' : '' }} >Virgina</option>
                            <option value='Washington' {{ ('state' == 'Washington')  ? 'SELECTED' : '' }} >Washington</option>
                            <option value='West Virginia' {{ ('state' == 'West Virginia')  ? 'SELECTED' : '' }} >West Virginia</option>
                            <option value='Wisconsin' {{ ('state' == 'Wisconsin')  ? 'SELECTED' : '' }} >Wisconsin</option>
                            <option value='Wyoming' {{ ('state' == 'Wyoming')  ? 'SELECTED' : '' }} >Wyoming</option>
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