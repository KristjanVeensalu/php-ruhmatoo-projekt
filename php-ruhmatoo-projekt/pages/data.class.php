<?php

class data{
	
	
	private $connection;
	
	function __construct($mysqli){
		$this->connection = $mysqli;}
		
		
		
		function dataentryAbs ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackAbs(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 

				
		
				
		
				
	}
	
	function dataentryBack ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackBack(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 

				
		
				
		
				
	}
	
	
	function dataentryChest ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackChest(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 

				
		
				
		
				
	}
	
	function dataentryCore ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackCore(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 

				
		
				
		
				
	}
	
	

				
		
				
		
				
	
	
	function dataentryLegs ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackLegs(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 

				
		
				
		
				
	}
	
	
	
	
	function dataentryShoulders ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackShoulders(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} 
				
		
				
		
				
	}
	
	function dataentryFood ($Food, $Calories, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackFood(food, calories, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("sis", $Food, $Calories, $email);
		
				if ($stmt->execute()){
				echo "Success";
				}

				
		
				
		
				
	}
	
	
		function getAllDataFood($email) {
		

		$stmt = $this->connection->prepare("
			SELECT food, calories, email
			FROM trackFood
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($Food, $Calories, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->food = $Food;
			$info->calories = $Calories;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}

	

	function getAllDataAbs($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackAbs
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}


function getAllDataShoulders($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackShoulders
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}

function getAllDataCore($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackCore
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}


function getAllDataBack($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackBack
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}


function getAllDataChest($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackChest
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}



function getAllDataLegs($email) {
		

		$stmt = $this->connection->prepare("
			SELECT reps, exercise, email
			FROM trackLegs
			WHERE email = ?
			
		");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($reps, $exercise, $emailD);
		$stmt->execute();
		
		$results = array();
		
		
		while ($stmt->fetch()) {
			
			$info = new StdClass();
			$info->reps = $reps;
			$info->exercise = $exercise;
			$info->email = $emailD;
			
			
			array_push($results, $info);
			
		}
		
		return $results;
		
	}







}

?>