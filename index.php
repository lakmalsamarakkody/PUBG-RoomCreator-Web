<?php
// INIT APP
include_once 'app/init.php';
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

	<!-- INCLUDE NAV -->
	<?php include_once ABS_PATH . '/tpl/nav.tpl.php'; ?>

	<!-- INCLUDE HEADER -->
	<?php include_once ABS_PATH . '/tpl/header.tpl.php'; ?>

	<section class="container">

		<!-- INCLUDE REGISTRATION FORM -->
		<?php include_once ABS_PATH . '/registration.php'; ?>

		<hr class="style2" />

		<!-- INCLUDE ROOM LIST -->
		<?php include_once ABS_PATH . '/roomlist.php'; ?>

	</section>

	<!-- INCLUDE FOOTER -->
	<?php include_once ABS_PATH . '/tpl/footer.tpl.php'; ?>

</body>
</html>