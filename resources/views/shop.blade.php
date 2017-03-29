@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Cakes

@endsection

@push('head')

    <link href="css/cakes.css" rel="stylesheet" />

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


		/*  FOOD-GALLERY 
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

@section('body')

    <body class="menu">

@endsection

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
							<label><input type="radio" name="category" value="cake" checked />Cake</label>
							<label><input type="radio" name="category" value="snacks" />Snacks</label>
							<label><input type="radio" name="category" value="others" />Others</label>
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
						<input type="text" name="couponCode" id="couponCode" class="textinput" maxlength="4" placeholder="Type your coupon code" required value="" /><br />
						
					</fieldset>

					<!-- SUBMIT BUTTON -->
					<input type="submit" name="apply" value="apply" />

				</form>

		</div>

		<!--MENU -->
		<div id="menu" class="gallery left">
			<ul>

				<li><a href="images/sweets/cakes/cake1.jpg" data-lightbox="cakes" data-title="Black Forest: layers of chocolate sponge cake with cherries, whipped cream, and more chocolate"><img src="images/sweets/cakes/thumb/cake1-small.jpg" alt="Chocolate cake" /></a></li>
				<li><a href="images/sweets/cakes/cake2.jpg" data-lightbox="cakes" data-title="Coconut Cake: cake with filling of coconuts and pineapple cream"><img src="images/sweets/cakes/thumb/cake2-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake3.jpg" data-lightbox="cakes" data-title="Oreo Cake: lots of oreo cookies, choc, and cherries"><img src="images/sweets/cakes/thumb/cake3-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake4.jpg" data-lightbox="cakes" data-title="Mushroom Cake: a cake with a bunch of mushrooms"><img src="images/sweets/cakes/thumb/cake4-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake5.jpg" data-lightbox="cakes" data-title="Choc Cherry Delight: chocolate and cherries"><img src="images/sweets/cakes/thumb/cake5-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake6.jpg" data-lightbox="cakes" data-title="Cherry Chocolate Cake: old-fashioned cherry chocolate cake"><img src="images/sweets/cakes/thumb/cake6-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake7.jpg" data-lightbox="cakes" data-title="Piece of Heaven Cake: our favorite"><img src="images/sweets/cakes/thumb/cake7-small.jpg" alt="One more cake" /></a></li>
				<li><a href="images/sweets/cakes/cake8.jpg" data-lightbox="cakes" data-title="Caramel Mud Cake: delicious caramel cake with some toppings on it!"><img src="images/sweets/cakes/thumb/cake8-small.jpg" alt="Another cake" /></a></li>
				<li><a href="images/sweets/cakes/cake9.jpg" data-lightbox="cakes" data-title="Another Chocolate Cake: pure and simple chocolate cake"><img src="images/sweets/cakes/thumb/cake9-small.jpg" alt="Last cake" /></a></li>
			</ul>
		</div>

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