@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Login
    
@endsection

@push('head')

    <link href="/css/login.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        <div id="form-wrapper">
            <h1>Login</h1>

            <form id="loginform" method='GET' action='/login'>
                <fieldset>
                    <ul>
                        <li>
                            <label for="email">Email <span class="required">&#40;Required&#41;</span></label>
                            <input type="email" name="email" id="email" maxlength="90" class="required email" value="" />
                        </li>  

                        <li>
                            <label for="password">Password <span class="required">&#40;Required&#41;</span></label>
                            <input type="password" name="password" id="password" maxlength="10" class="required" value=""/>
                        </li>
                    </ul>
                </fieldset>

                <p><input type="submit" name="checkUser" class="checkUser" value="Login" /></p>

                <p>Don&#39;t have an account&#63; Register <a href="/register">here</a></p>

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