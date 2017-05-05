@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - View All Orders
    
@endsection

@push('head')

	<link href="/css/view.css" rel="stylesheet" />

@endpush

@section('main')

	<main>

	    @if(Session::get('message') != null)
	        <div class='message'>
	        	{{ Session::get('message') }}
	        </div>
	    @endif

		<h1>View all orders...</h1>
		
	</main>

@endsection