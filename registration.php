<div class="form-group formhead"> 
	<label class="pt-4" id="form_reg"> Registration form </label>
</div>

<form name="registration" method="post" action="<?php APP_FQDN ?>/controller/userregcontroller.php">
	<div class="form-row">

		<!-- GAME CREDENTIALS -->
		<div class="form-group col-md-4 mb-5 mt-5">
			<label class="pr-2"> Your Group </label>
			<select class="form-control" required >
				<option id="1"> PUBG Sri Lanka </option>
				<option id="2"> PUBG Noobs </option>
			</select>
		</div>

		<div class="form-group col-md-4 mb-5">
			
		</div>

		<div class="form-group text-right col-md-4 mb-5 mt-5">
			<label> In Game Name </label>
			<input class="form-control mb-1" type="text" name="ign" placeholder="Enter your In Game Name here" required/>
			<div class="form-row">
				<input class="form-control col-7 text-center" id="disabledinput" type="text" value="Verfication" disabled />
				<input class="form-control col-4 btn btn-secondary ml-3" type="button" value="check status" />
			</div>
		</div>

		<!-- PERSONAL DETAILS -->
		<div class="form-group col-md-4 mb-4">
			<label> First Name </label>
			<input class="form-control" type="text" name="fn" placeholder="Enter your First name here" required />
		</div>

		<div class="form-group col-md-6 mb-4">
			<label> Last Name </label>
			<input class="form-control" type="text" name="ln" placeholder="Enter your Last name here" required />
		</div>

		<div class="form-group col-md-2 mb-4">
			<label> Gender </label> <br/>
			<input type="radio" name="gen" value="Male" checked /> Male
			<input type="radio" name="gen" value="Female" /> Female
		</div>

		<div class="form-group col-md-4 mb-4">
			<label> Mobile Number </label>
			<input class="form-control" type="number" name="mn" placeholder="Enter your Mobile number here" required />
		</div>

		<div class="form-group col-md-4 mb-4">
			<label> Whatsapp number (re-type if same as mobile)</label>
			<input class="form-control" type="number" name="wn" placeholder="Enter your Whatsapp number here" required />
		</div>

		<div class="form-group col-md-4 mb-4">
			<label> Current Game Level </label>
			<input class="form-control" type="number" name="gl" placeholder="Enter your Current Game level here" required />
		</div>

		<div class="form-group col-md-12 mb-4">
			<label> Email </label>
			<input class="form-control" type="email" name="email" placeholder="Enter your Email here" />
		</div>

		<div class="form-group col-md-12 mb-4">
			<label> Confirm Email </label>
			<input class="form-control" type="email" name="confirmemail" placeholder="Confirm your Email here" />
		</div>

		<!-- SOCIAL MEDIA -->
		<div class="form-group col-md-4 mb-4">
			<label> Facebook Name </label>
			<input class="form-control" type="text" name="fb" placeholder="Enter your Facebook name here" required/>
		</div>

		<div class="form-group col-md-8 mb-4">
			<label> Facebook Profile URL </label>
			<input class="form-control" type="Url" name="fburl" placeholder="Enter your Facebook URL here" required/>
		</div>
	</div>

	<input class="btn btn-primary mb-5" type="submit" name="createuser" value="Register" />

</form>

