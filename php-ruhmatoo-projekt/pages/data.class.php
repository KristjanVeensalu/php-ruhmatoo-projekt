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
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	function dataentryBack ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackBack(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	
	function dataentryChest ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackChest(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	function dataentryCore ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackCore(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
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
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	
	
	
	function dataentryShoulders ($exercise, $reps, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackShoulders(reps, exercise, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("iss", $exercise, $reps, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	function dataentryFood ($Food, $Calories, $email) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackFood(food, calories, email) VALUE (?, ?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("sis", $food, $calories, $email);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
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
























?>