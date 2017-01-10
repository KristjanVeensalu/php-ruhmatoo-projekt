<?php
var_dump ($_POST);
require ("functions.php");
if (!isset($_SESSION["userId"])) {
	header("Location: esileht.php");
}
	$Abs = "Abs";
	$email = $_SESSION["userEmail"];
	$exerciseError = ""; 
	$repError = "";
	$exercise = " ";
	$reps = " ";
	$selectionError = "";
	$selection = "";
	$Food = "";
	$Calories = "";
	
if (isset ($_POST["exercise"]))
		{
		if( empty ($_POST["exercise"])){
			$exerciseError = "Field must be filled";}
		}
if (isset ($_POST["reps"]))
		{
		if( empty ($_POST["reps"])){
			$repError = "Field must be filled";}
		}
if (isset ($_POST["selection"]))
			{
		if (empty ($_POST[selection])){
			$selectionError = "Field must be filled";}	
			}
		
		
		
		
if($exerciseError == "*"  &&
	$repError == "*"	&&
	isset($_POST["Exercise"]) &&
	isset($_POST["Selection"]) &&
	isset($_POST["Reps"]))
	{$exercise = $_POST["Exercise"];
		$reps = $_POST["Reps"];
			$selection = $_POST["Selection"];
				if($selection == $Abs){
					$data->dataentryAbs ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}
									
				if($selection == "Chest"){
					$data->dataentryChest ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}	
								
				if($selection == "Back"){
					$data->dataentryBack ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}
									
				if($selection == "Core"){
					$data->dataentryCore ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}	
								
				if($selection == "Legs"){
					$data->dataentryLegs ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}
								
				if($selection == "Shoulders"){
					$data->dataentryShoulders ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}
					}
	if (isset ($_POST["Food"])&&
		isset ($_POST["Calories"]))
		{
			
			$Food = $_POST["Food"];
			$Calories = $_POST["Calories"];
			$data->dataentryFood ($Food, $Calories, $email);
			
			
		}
	

					
					
					
					
					
					
					
					

				
					
				






















 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2">
		<form method="POST">
			<div class="row">
				<select name="Selection" class="form-control"> <?php echo $selectionError ?>
					<option value="None">Choose muscle group</option>
					<option value="Abs" >Abs</option>
					<option value="Back">Back</option>
					<option value="Chest">Chest</option>
					<option value="Core">Core</option>
					<option value="Legs">Legs</option>
					<option value="Shoulders">Shoulders</option>
				</select>
			</div>
			<br>
			<div class="input-group input-group-sm">
				<div class="row">
					<input class="form-control" name="Exercise" placeholder="Exercise" type="text"> <?php echo $exerciseError ?>
				</div>
				<br>
				<div class="row">
					<input class="form-control" name="Reps" placeholder="Reps" type="number"> <?php echo $repError ?>
				</div>
				<br>
				<div class="row">
					<input class="btn btn-success btn-block" type="submit" value="Sisesta">
				</div>
			</div>
		</form>
		
		<br><br>
		
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
							<input class="form-control" name="Food" placeholder="Food" type="username">
					</div>
					
					<div class="row">
						<input class="form-control" name="Calories" placeholder="Calories" type="text">
					</div>
					<br>
					
					<div class="row">
						<input class="btn btn-primary btn-block" type="submit" value="Sisesta">
					</div>
				</div>
		</form>
	</div>
	
	<div class="col col-xs-offset-3 align-center">
		<h2>Do it bodyweight</h2>

	<h1> Full table view </h1>
	
	
<?php 
$view = $data->getAllDataFood($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Food</th>";
			$html .= "Food";
			$html .= "<br></br>";
			$html .= "<th>Calories</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->food."</td>";
				$html .= "<td>".$v->calories."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
	
$view = $data->getAllDataAbs($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<th>Reps</th>";
			$html .= "Abs";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
	
$view = $data->getAllDataShoulders($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Reps</th>";
			$html .= "Shoulders";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
	
$view = $data->getAllDataChest($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Reps</th>";
			$html .= "Chest";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
	
$view = $data->getAllDataLegs($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Reps</th>";
			$html .= "Legs";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;

	
$view = $data->getAllDataBack($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Reps</th>";
			$html .= "Back";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
	
$view = $data->getAllDataCore($email);

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<br></br>";
			$html .= "<th>Reps</th>";
			$html .= "Core";
			$html .= "<br></br>";
			$html .= "<th>Exercise</th>";
		$html .= "</tr>";
		
		foreach ($view as $v) {
			
			$html .= "<tr>";
				$html .= "<td>".$v->reps."</td>";
				$html .= "<td>".$v->exercise."</td>";

                

			$html .= "</tr>";
		
		}
		
	$html .= "</table>";
	
	echo $html;
?>

	</div>
</div>
<?php require("../footer.php"); ?>