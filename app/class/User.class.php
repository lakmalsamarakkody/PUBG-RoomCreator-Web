<?php

class User {

	public $DBH = NULL;


	function __construct() {
		$this->DBH = DBH::Instance();
	}


	public function get_username_by_id($param) {
		
		if ( isset($param) AND !empty($param) AND $param != NULL ):

			// VALIDATE IF VALID ID

			// GET USERNAME FOR ID
			// $Query = $this->DBH->prepare("SELECT ign FROM user WHERE user_id = :_user_id");
			// $Query->bindParam(':_user_id', $param, PDO::PARAM_INT);

			// if ( $Query->execute() ):

			// 	$raw_data = $Query->fetch();

			// 	return $raw_data;

			// else:
			// 	return "Something wrong with the query";
			// endif;


			$Query = $this->DBH->prepare("SELECT * FROM team ORDER BY team_id DESC");
			
			if ( $Query->execute() ):
				$raw_data = $Query->fetchAll();
				return $raw_data;
			endif;

		else:
			return "Something wrong with the query";
		endif;

	}

}


?>