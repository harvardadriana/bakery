@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Stores
    
@endsection

@push('head')

	<link href="/css/stores.css" rel="stylesheet" />
    
@endpush

@section('main')

	<main>
		<div id="ourStores">
			<h1>Our Stores</h1>

			<div class="store">
				<div id="harvardSquare" class="map"></div>
				<div class="storeInfo">
					<h2>Harvard Square</h2>
					<p>10 Brattle Street Cambridge MA 02138</p>
					<p>(234) 239 0000</p>
					<p class="time">Mon-Sat: 10AM to 10PM</p>
					<p>Closed on Sundays</p>
				</div>
			</div>
			<div class="store">
				<div id="chelsea" class="map"></div>
				<div class="storeInfo">
					<h2>Chelsea</h2>
					<p>400 West 24th street New York NY 10001</p>
					<p>(888) 800 8000</p>
					<p class="time">Mon-Sat: 10AM to 10PM</p>
					<p>Sun: 8AM to 8PM</p>
				</div>
			</div>
			<div class="store">
				<div id="santaMonica" class="map"></div>
				<div class="storeInfo">
					<h2>Santa Monica</h2>
					<p>1200 7th street Santa Monica CA 94010</p>
					<p>(543) 500 0123</p>
					<p class="time">Mon-Sat: 10AM to 10PM</p>
					<p>Sun: 8AM to 8PM</p>
				</div>
			</div>
		</div>
	</main>

@endsection

@push('script')

	<!-- SCRIPTS RELEVANT FOR THIS PAGE ONLY -->
	<!-- Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9NXpRJ8_Rf54a9ovXF1nyu_TsmM_qWoI"> </script>	
	<script src="/js/stores.js"></script>	

@endpush