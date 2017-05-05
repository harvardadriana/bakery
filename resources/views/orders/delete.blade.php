@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Delete
    
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

	    <form method='POST' action='/orders/delete'>
	        {{ csrf_field() }}

			<h1>Delete Order number {{ $id }} &#63;</h1>

			<input type="hidden" name="id" value="{{ $id }}" /> 
			<input type='submit' value='Delete order&#63;' />

			<table>
				<thead>
					<tr>
						<th></th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>	
				</thead>

				<tbody>
					@foreach($productsArray as $product) 
						<tr>
							<td>{!! $product->image !!}</td>
							<td>{!! $product->product_name !!}</td>
							<td>1</td>
							<td>{!! $product->price !!}</td>						
						</tr>
					@endforeach
				</tbody>
			</table>

			<div id="total">
				<p>Total: {{ $totalPrice }}</p>
			</div>

		</form>
	
	</main>

@endsection