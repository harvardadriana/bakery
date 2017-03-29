				<form method="GET" action="/shop">

					<!-- DISPLAYS ERROR MESSAGES: field required and letters only 
					<?php if($errors): ?>
						<div class="errors">
							<?php foreach($errors as $error): ?>
								<?=$error?><br />
							<?php endforeach; ?>						
						</div>
					<?php endif; ?>  -->


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
						<input type="text" name="couponCode" id="couponCode" class="textinput" maxlength="4" placeholder="Type your coupon code" required value="<?=$couponCode?>" /><br />
					
						
					</fieldset>

					<!-- SUBMIT BUTTON -->
					<input type="submit" name="apply" value="apply" />

				</form>


<!-- food display  -->



		<!-- SHOPPING CART -->
		<div id="cart" class="right">
			<h2>Shopping cart:</h2>


			<!-- DISPLAY TOTAL -->
			<div class="total">
				<p>Total: <?=$results?></p>
			</div> 

		</div>










