@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - View Profile
    
@endsection

@push('head')

    <link href="/css/profile/view.css" rel="stylesheet" />
    
@endpush

@section('main')

    <main>
        
        @if(Session::get('message') != null)
            <div class='message'>
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="profileWindow">
            
            <h1>Your Profile</h1>

            <p>Name:</p>
            <p>{{ $user->name }}</p><br />

            <p>Street:</p>
            <p>{{ $user->street }}</p><br />

            <p>State:</p>
            <p>{{ $user->state }}</p><br />

            <p>Zip:</p>
            <p>{{ $user->zip }}</p><br />

            <p>Subscribed to our newsletter?</p>
            <p>{{ $user->subscribe }}</p>

        </div>

    </main>
    
@endsection