<?php

class data{
	
	
	private $connection;
	
	function __construct($mysqli){
		$this->connection = $mysqli;}
		
		
		
		function dataentryAbs ($exercise, $reps) {
		
		
			$stmt = $this->connection->prepare("
		
				INSERT INTO trackAbs(reps, exercise) VALUE (?, ?)
			
				");
			echo $this->connection->error;
		
			$stmt->bind_param("is", $exercise, $reps);
		
				if ($stmt->execute()){
				echo "Success";
				} else {
				echo "ERROR";
				};

				
		
				
		
				
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

























}
?>