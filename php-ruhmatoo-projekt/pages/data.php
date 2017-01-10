<?php
var_dump ($_POST);
require ("functions.php");
if (!isset($_SESSION["userId"])) {
	header("Location: esileht.php");
}
	$Abs = "Abs";
	$email = $_SESSION["userEmail"];
	$exerciseError = "*"; 
	$repError = "*";
	$exercise = " ";
	$reps = " ";
	$selectionError = "*";
	$selection = "";
	
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
					echo "True";
					$data->dataentryAbs ($Helper->cleanInput($reps), $Helper->cleanInput($exercise), $Helper->cleanInput($email));}
									
				if($selection == "Chest"){
					echo "True";
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
	
	

					
					
					
					
					
					
					
					

				
					
				






















 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2"
	<br>
		<form method="POST">
						<select name = "Selection"> <?php echo $selectionError ?>
							<option value="None"> </option>
							<option value="Abs" >Abs</option>
							<option value="Back">Back</option>
							<option value="Chest">Chest</option>
							<option value="Core">Core</option>
							<option value="Legs">Legs</option>
							<option value="Shoulders">Shoulders</option>
						</select>
					<br></br>
				<div class="input-group input-group-sm">
					<div class="row">
						<input class="form-control" name="Exercise" placeholder="Exercise" type="text"> <?php echo $exerciseError ?>
					</div>
					
					<div class="row">
						<input class="form-control" name="Reps" placeholder="Reps" type="number"> <?php echo $repError ?>
					</div>
					
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
	
	<div class="col col-xs-offset-3">
		<h2>Do it bodyweight</h2>
		<p> Results </p>

	<h1> Full table view </h1>
	
	
<?php 

$view = $data->getAllDataAbs();

	$html = "<table>";
	
		$html .= "<tr>";
			$html .= "<th>Reps</th>";
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