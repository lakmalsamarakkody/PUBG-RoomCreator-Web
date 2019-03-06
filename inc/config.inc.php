<?php

// APP
define('APP_TITLE', 'PUBG Room');
define('APP_PRT', 'http');
define('APP_DOM', 'localhost/sites/pubgroom');
define('APP_FQDN', APP_PRT.'://'.APP_DOM);

// DATABASE
define('DB_HOST', 'localhost');
define('DB_NAME', 'pubgroom');
define('DB_USER', 'root');
define('DB_PASS', '');

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);  

?>