@extends('layouts.master')

@section('title')

    Piece of Heaven Bakery - Contact us
    
@endsection

@push('head')

	<link href="/css/contactus.css" rel="stylesheet" />
    
@endpush

@section('main')

	<main>
		<div id="form-wrapper">
			<h1>Contact us</h1>
			<form id="contactusform" method="post" action="">
				<fieldset>
					<ul>
						<li>
							<label for="name">Name <span class="required">&#40;Required&#41;</span></label>
							<input type="text" name="name" id="name" maxlength="30" class="required"/>
						</li>
						<li>
							<label for="email">Email <span class="required">&#40;Required&#41;</span></label>
							<input type="email" name="email" id="email" maxlength="30" class="required email" />
						</li>	
						<li>
							<label for="message">Message <span class="required">&#40;Required&#41;</span></label>
							<textarea name="message" maxlength="250" rows="5" cols="60" id="message" placeholder="Up to 250 characters" class="required"></textarea>
						</li>
					</ul>
				</fieldset>
				<p><input type="submit" name="submit" class="submit" value="Submit" /></p>
			</form>
		</div>
	</main>

@endsection

@push('script')
	<!-- SCRIPTS RELEVANT FOR THIS PAGE ONLY -->
	<!-- jquery validation CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<script src="js/scripts.js"></script>
@endpush