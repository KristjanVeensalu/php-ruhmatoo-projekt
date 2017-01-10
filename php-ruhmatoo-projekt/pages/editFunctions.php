<?php

	require_once("../../../../config.php");
	
	function getSinglePersonData($edit_id){
    
        $database = "if16_doitbodyweight";

		//echo "id on ".$edit_id;
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $database);
		
		$stmt = $mysqli->prepare("SELECT reps, exercise FROM whistle WHERE id=? AND deleted IS NULL");

		$stmt->bind_param("i", $edit_id);
		$stmt->bind_result($reps, $exercise);
		$stmt->execute();
		
		//tekitan objekti
		$p = new Stdclass();
		
		//saime ühe rea andmeid
		if($stmt->fetch()){
			// saan siin alles kasutada bind_result muutujaid
			$p->reps = $reps;
			$p->exercise = $exercise;
			
			
		}else{
			// ei saanud rida andmeid kätte
			// sellist id'd ei ole olemas
			// see rida võib olla kustutatud
			header("Location: data.php");
			exit();
		}
		
		$stmt->close();
		$mysqli->close();
		
		return $p;
		
	}


	function updatePerson($id, $reps, $exercise, $email){
    	
        $database = "if16_doitbodyweight";

		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $database);
		
		$stmt = $mysqli->prepare("UPDATE whistle SET reps=?, exercise=? WHERE id=? AND deleted IS NULL");
		$stmt->bind_param("isi",$reps, $exercise, $id);
		
		// kas õnnestus salvestada
		if($stmt->execute()){
			// õnnestus
			echo "salvestus õnnestus!";
		}
		
		$stmt->close();
		$mysqli->close();
		
	}
	
	function deletePerson ($id)	{
		
		
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		
		$database="if16_doitbodyweight";
		
		$stmt = $mysqli->prepare("
		UPDATE whistle
		SET deleted = NOW()
		WHERE id=? AND deleted IS NULL
		");
		
		$stmt->bind_param("i", $id);
		if($stmt->execute());
			echo"kustutamine onnestus";
			
		$stmt->close();
		$mysqli->close();
		
	}
	
?>