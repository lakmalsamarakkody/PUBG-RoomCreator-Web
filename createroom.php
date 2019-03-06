<div class="form-group formhead"> 
	<label class="pt-4" id="createroom"> Create Room </label>
</div>

<form name="createroom" method="post" action="<?php echo APP_FQDN ?>/controller/roomcontroller.php">
	<div class="form-row">
		<!-- GAME CREDENTIALS -->
		<div class="form-group col-md-2 mb-5 mt-5">
			<label class="pr-2"> Your Group </label>
			<input class="form-control" type="text" name="group" readonly />
		</div>
		<div class="col-md-10"></div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Date </label>
			<input class="form-control" type="date" name="date" required />
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Room ID </label>
			<input class="form-control" type="text" name="pr_id" required />
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Password </label>
			<input class="form-control" type="text" name="pr_ps" required />
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Server </label>
			<select class="form-control"name="server" required >
				<option id="1"> Europe </option>
				<option id="2"> Asia </option>
				<option id="3"> North America </option>
				<option id="4"> South America </option>
				<option id="5"> Korea/Japan </option>
				
			</select>
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> FPP/TPP </label>
			<select class="form-control"name="pp" required >
				<option id="1"> TPP </option>
				<option id="2"> FPP </option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Mode </label>
			<select class="form-control"name="mode" required >
				<option id="1"> Classic </option>
				<option id="2"> Arcade </option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Map/type </label>
			<select class="form-control"name="map_type" required >
				<option id="1"> Erangal </option>
				<option id="2"> Miramar </option>
				<option id="3"> Zanhok </option>
				<option id="4"> Quick Match </option>
				<option id="5"> Mini Zone </option>
				<option id="6"> Sniper training </option>
				<option id="7"> War </option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Team </label>
			<select class="form-control"name="team" required >
				<option id="1"> Single </option>
				<option id="2"> Duo </option>
				<option id="3"> Squad </option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Opens at </label>
			<input class="form-control" type="time" name="opentime" required />
		</div>

		<div class="form-group col-md-3">
			<label class="pr-2"> Starts at </label>
			<input class="form-control" type="time" name="starttime" required />
		</div>

		<div class="form-group col-md-6	">
			<label class="pr-2"> Rules </label>
			<textarea name="rules" rows="3" cols="66" required></textarea>
		</div>

	</div>

	<input class="btn btn-primary mb-5" type="submit" name="createroom" value="Create Room" />
	<input class="btn btn-secondary mb-5" type="reset" value="Clear" />
</form>