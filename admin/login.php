<?php

// INIT APP
include_once '../app/init.php';

$Team = new Team;

 

?>

<!DOCTYPE html>
<html>
	<head>

		<!-- TITLE -->
		<title><?php echo APP_TITLE; ?></title>

		<!-- INCLUDE HEADER PARTS -->
		<?php include_once ABS_PATH . '/tpl/header.parts.php'; ?>

	</head>

	<body>

		<div class="container mt-5 pt-5">
			<div class="row justify-content-center pb-5 div-login">
				<form name="loginform" method="post" action="<?php echo APP_FQDN ?>/controller/adminlogincontroller.php">

					<div class="mt-5 form-group formhead">
						<label> Admin Panel </label>
					</div>

					<div class="form-group"> 
						<label id="sprytextfield2"> User Name </label>
						<input class="form-control" type="text" name="username" />
					</div>

					<div class="form-group mt-3">
						<label id="sprytextfield1"> Password </label>
						<input class="form-control" type="password" name="password" />
					</div>
				
					<input class="btn btn-primary mt-5 pr-3" type="submit" name="Login" value="Login" />
					<input class="btn btn-secondary mt-5" type="reset" name="reset" value=" Clear"/>
				</form>
			</div>
		</div>
	</body>
</html>