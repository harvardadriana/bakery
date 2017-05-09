@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Profile changed
    
@endsection

@push('head')

    <link href="/css/auth.css" rel="stylesheet" />
    <link href="/css/register.css" rel="stylesheet" />
    
@endpush

@section('main')

	<main>
        @if(Session::get('message') != null)
            <div class='message'>
                {{ Session::get('message') }}
            </div>
        @endif

    </main>

@endsection