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
            <h1>Register</h1>

            <form id="registerform" method='GET' action='/register'>
                <fieldset>
                    <ul>
                        <li>
                            <label for="name">Name <span class="required">&#40;Required&#41;</span></label>
                            <input type="name" name="name" id="name" maxlength="150" class="required name" value="" />
                        </li>  
  
                        <li>
                            <label for="email">Email <span class="required">&#40;Required&#41;</span></label>
                            <input type="email" name="email" id="email" maxlength="90" class="required email" value="" />
                        </li>  

                        <li>
                            <label for="password">Password <span class="required">&#40;Required&#41;</span></label>
                            <input type="password" name="password" id="password" maxlength="10" class="required" value=""/>
                        </li>

                        <li>
                            <label for="passwordconfirm">Retype password <span class="required">&#40;Required&#41;</span></label>
                            <input type="passwordconfirm" name="passwordconfirm" id="passwordconfirm" maxlength="10" class="required" value=""/>
                        </li>

                        <li>
                            <label for="address">Address <span class="required">&#40;Required&#41;</span></label>
                            <input type="address" name="address" id="address" maxlength="90" class="required address" value="" />
                        </li>  

                    </ul>
                </fieldset>

                <p><input type="submit" name="register" class="register" value="Register" /></p>

            </form>
        </div>
    </main>

@endsection

@push('script')
    <!-- SCRIPTS RELEVANT FOR THIS PAGE ONLY -->
    <!-- jquery validation CDN -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>
@endpush