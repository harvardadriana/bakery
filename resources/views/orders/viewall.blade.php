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

		<h1>View all orders of {{ $user_name }} </h1>

		@foreach($ordersList as $products)

		 	<table>
			
				<caption>Order number: {{ $products[0]['pivot']['order_id'] }}</caption>

				<thead>
					<tr>
						<th></th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>	
				</thead>

				<tbody>

					@foreach($products as $product)
						<tr>
							<td>{!! $product['image'] !!}</td>
							<td>{!! $product['product_name'] !!}</td>
							<td>1</td>
							<td>{{ $product['price'] }}</td>
						</tr>
					@endforeach

				</tbody>
			</table>

		@endforeach

	</main>

@endsection