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

		@if($ordersList)

			<h1>View all orders of {{ $user_name }} </h1>

			@foreach($ordersList as $orders)

			 	<table>
				
					<caption>Order number: {{ $orders[0]['pivot']['order_id'] }}</caption>

					<thead>
						<tr>
							<th></th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>	
					</thead>

					<tbody>

						@foreach($orders as $product)
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

		@else
			
			<h1>You have no orders.</h1>
			<div class="emptyCart">
				<img src="../images/cupcake.jpg" alt="cupcake" />
			</div>
			
		@endif

	</main>

@endsection