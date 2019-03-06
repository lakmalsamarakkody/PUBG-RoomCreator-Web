<?php

class DBH {

	private function __construct() {
		// STOP CREATING MAJIC METHOD
	}

	// STATIC FUNCTION FOR DATABASE INSTANCE
	public static function Instance() {

		static $DBH = NULL;

		// CHECK IF DATABASE CONNECTION IS ALREADY EXISTS
		if ( !$DBH ):

			// TRY TO INITIATE DATABASE CONNECTION
			try {
				$DBH = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
				$DBH -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$DBH -> query('SET NAMES utf8');
			} catch (PDOException $e) {
				// DISPLAY ERROR IF CONNECTION ISSUES
				echo "Connection Failed". $e->getMessage();
			}

			
		endif;

		// RETURN STATIC DATABASE OBJECT
		return $DBH;
	}

}

?>