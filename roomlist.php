<div class="form-group formhead"> 
	<label class="pt-4" id="roomlist"> Room List </label>
</div>

<form name="registration" method="get" action="<?php APP_FQDN ?>/controller/roomlistcontroller.php">
	<div class="form-row">
	
		<!-- GAME CREDENTIALS -->
		<div class="form-group col-md-4 mb-5 mt-5">
			<label class="pr-2"> Your Group </label>
			<select class="form-control">
				<option id="1"> PUBG Sri Lanka </option>
				<option id="2"> PUBG Noobs </option>
			</select>
		</div>

		<div class="form-group col-md-4 mb-5">
			
		</div>

		<div class="form-group text-right col-md-4 mb-5 mt-5">
			<label> In Game Name </label>
			<input class="form-control mb-1" type="text" name="ign" placeholder="Enter your In Game Name here" />
			<input class="btn btn-secondary" type="button" value="View Rooms">
		</div>

		<div class="container">
			<div class="row">
				<table class="table table-bordered table-hover">
					<tr class="thead-dark">
						<th> Date </th>
						<th> Room ID </th>
						<th> Password </th>
						<th> Server </th>
						<th> FPP/TPP </th>
						<th> Mode </th>
						<th> Map/type </th>
						<th> Opens at </th>
						<th> Starts at </th>
						<th class="th-rules"> Rules </th>
					</tr>

					<tr>
						<td> 2018 / 10 / 29 </td>
						<td> 56789 </td>
						<td> 1234 </td>
						<td> Europe </td>
						<td> TPP </td>
						<td> Classic </td>
						<td> Erangal </td>
						<td> 8.30 pm </td>
						<td> 9.00 pm </td>
						<td> Grenades only </td>
					</tr>
				</table>
			</div>
		</div>
</form>

