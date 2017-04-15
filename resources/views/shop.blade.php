@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Cakes

@endsection

@push('head')

    <link href="/css/cakes.css" rel="stylesheet" />

    <style>
    	
		/* cakes.css */


		/*  LAYOUT 
		 ************************/
		.left {			
			width: 70%;
			height: auto;
			margin: 32px 0 32px 32px;
			background-color: #DDDDDD;
			border-radius: 5px;
		}

		.right {
			width: 20%;
			margin-top: 32px;
			margin-right: 32px;
		}


		/*  FORMS  
		 ************************/
		 label, legend, fieldset {
		 	width: 250px;
		 	display: inline;
		 }
	

		#selection {
			background-color: #DDDDDD;
			margin: 32px 32px 0 32px;

		}

		/*  MENU
		 ************************/
		#menu ul {
			float: left;
			padding: 10px;
		}

		#menu li {
			float: left;
			margin: 5px 5px 0 10px;
		}

		#menu li img {
			width: 220px;
			height: 170px;
		}


		/*  SHOPPING CART  
		 ************************/
		#cart {
			background-color: #DDDDDD;
		}

		#cart h2 {
		}

    </style>


@endpush



@section('main')

	<main>
		
		<div id="selection">
			<p>
				Sort by:
			</p>

				<form method="GET" action="/shop">
			    	
					<!-- CATEGORY -->
					<fieldset>
						<legend>Category</legend>
						<div id="category">
							<label><input type="radio" name="category" value="cakes" {{ ($category == 'cake') ? 'CHECKED' : '' }} />Cake</label>
							<label><input type="radio" name="category" value="snacks" {{ ($category == 'snacks') ? 'CHECKED' : '' }} />Snacks</label>
							<label><input type="radio" name="category" value="others" {{ ($category == 'others') ? 'CHECKED' : '' }} />Others</label>
						</div>
					</fieldset>

					<!-- DISCOUNT COUPON -->
					<fieldset>
						<legend>Discount coupon</legend>
						<div id="coupon">
							<label><input type="checkbox" name="coupon" value="yes" />Yes</label>
						</div>

						<!-- IF YES: get coupon code -->
						<label for="couponCode" class="textinput required" >Coupon code: <br />&#42;Required</label>
						<input type="text" name="couponCode" id="couponCode" class="textinput" maxlength="4" placeholder="Type your coupon code" value="" /><br />
						
					</fieldset>

					<!-- SUBMIT BUTTON -->
					<input type="submit" name="apply" value="apply" />

				</form>

		</div>

		@if($category) 
			<div>Filter by: {{ $category }} </div>
		@endif



		<!--MENU -->
		@if($menu)

			<div id="menu" class="gallery left">
				<ul>


						<li><a href="" data-lightbox="cakes" data-title="Black Forest: layers of chocolate sponge cake with cherries, whipped cream, and more chocolate"></a></li>

				</ul>
			</div>

		@endif

		<!-- SHOPPING CART -->
		<div id="cart" class="right">
			<h2>Shopping cart:</h2>


			<!-- DISPLAY TOTAL -->
			<div class="total">
				<p>Total: </p>
			</div> 

		</div>





	</main>

@endsection

@push('script')

    <script src="js/cakes.js"></script>

@endpush