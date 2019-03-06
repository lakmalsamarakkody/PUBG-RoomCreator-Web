<?php

// STARTING NEW SESSION
session_start();

// SET ABS PATH FOR INIT
define('ABS_PATH', realpath(__DIR__ . '/..'));

// INCLUDE CONFIGURATION
include_once ABS_PATH . '/inc/config.inc.php';

// INCLUDE LIBS

// INCLUDE CLASS
include_once ABS_PATH . '/app/database.class.php';
include_once ABS_PATH . '/app/class/User.class.php';
include_once ABS_PATH . '/app/class/Team.class.php';

?>