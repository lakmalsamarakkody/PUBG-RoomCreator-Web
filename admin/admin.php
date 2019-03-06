<?php
// INIT APP
include_once  '../app/init.php';
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
		<div class="container-fluid">
			<div class="row">

				<!-- INCLUDE NAV -->
				<?php include_once ABS_PATH . '/tpl/nav.tpl.php'; ?>

				<div class="container">
					
					<!-- INCLUDE CREATE GROUP -->
					<?php include_once ABS_PATH . '/admin/creategroup.php'; ?>										
				</div>
			</div>
		</div>	
	</body>
</html>




