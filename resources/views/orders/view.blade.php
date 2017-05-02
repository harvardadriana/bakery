@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Order
    
@endsection

@push('head')

	<link href="/css/stores.css" rel="stylesheet" />
    
@endpush

@section('main')

        @if(Session::get('message') != null)
            <div class='message'>
            	{{ Session::get('message') }}
            </div>
        @endif

	<h1>Your order has been placed. Order Number: {{ $id }}</h1>

	@foreach($products as $product)
		
		{{ $product }} <br/><br/>

	@endforeach

@endsection