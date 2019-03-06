<?php

class Team {

	public $DBH = NULL;

	function __construct() {
		$this->DBH = DBH::Instance();
	}


	public function add($name) {

		if ( isset($name) AND !empty($name) AND $name != NULL ):

			$Query = $this->DBH->prepare("INSERT INTO team (team_name) VALUES (:_name)");
			$Query->bindParam(':_name', $name);

			if ( $Query->execute() ):
				echo "Done";
			else:
				echo "Fail";
			endif;

		endif;

	}

}

?>