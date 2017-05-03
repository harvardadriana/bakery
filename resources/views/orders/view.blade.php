@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Order
    
@endsection

@push('head')

	<link href="/css/view.css" rel="stylesheet" />

@endpush

@section('main')

    @if(Session::get('message') != null)
        <div class='message'>
        	{{ Session::get('message') }}
        </div>
    @endif

	<table>
		<caption>Order Number: {{ $id }}</caption>

		<thead>
			<tr>
				<th></th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>	
		</thead>

		<tbody>
			@foreach($arrayProductsList as $products=>$product) 
				@foreach($product as $p)
					<tr>
						<td>{!! $p->image !!}</td>
						<td>{!! $p->product_name !!}</td>
						<td>1</td>
						<td>{!! $p->price !!}</td>						
					</tr>
				@endforeach
			@endforeach
		</tbody>
	</table>

	<div id="total">
		<p>Total: {{ $totalPrice }}</p>
	</div>

@endsection