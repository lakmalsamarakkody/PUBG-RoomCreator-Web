<div class="form-group formhead"> 
	<label class="pt-4" id="creategroup"> Create Group </label>
</div>

<form name="creategroup" method="post" action="<?php echo APP_FQDN ?>/controller/groupcontroller.php">
	<div class="form-row">
		<!-- GAME CREDENTIALS -->
		<div class="form-group col-md-4 mb-5 mt-5">
			<label class="pr-2"> New Group name </label>
			<input class="form-control" type="text" name="newgroup" placeholder="type your new Group name" required />
		</div>
		<div class="col-md-8"></div>

		<!-- GAME CREDENTIALS -->
		<div class="form-group col-md-4 mt-5">
			<label class="pr-2"> Username </label>
			<input class="form-control" type="text" name="newusername" placeholder="type your new group username" required />
		</div>

		<div class="form-group col-md-4 mt-5">
			<label class="pr-2"> New Password </label>
			<input class="form-control" type="password" name="newpassword" placeholder="type your new group password" required />
		</div>

		<div class="form-group col-md-4 mt-5">
			<label class="pr-2"> Confirm Password </label>
			<input class="form-control" type="password" name="confirmnewpassword" placeholder="re-type your group password" required />
		</div>
	</div>

	<input class="btn btn-primary mb-5" type="submit" name="creategroup" value="Create Group" />
	<input class="btn btn-secondary mb-5" type="reset" value="Clear" />
</form>