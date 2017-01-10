<?php
var_dump ($_POST);
require ("functions.php");

if (!isset($_SESSION["userId"])) {
	header("Location: esileht.php");
}


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
			$selection = "Field must be filled";}	
			}
		
		
		
		
if($exerciseError == "*"  &&
	$repError == "*"	&&
	isset($_POST["exercise"]) &&
	isset($_POST["reps"]))
	{$exercise = $_POST["Exercise"];
		$reps = $_POST["Reps"];
			$selection = $_POST["Selection"];
	}
				
					
				


if($selection = "Abs"){
			$data->dataentryAbs ($Helper->cleanInput($exercise), $Helper->cleanInput($reps));
}



















 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2"
	<br>
		<form method="POST">
						<select name = "Selection"> <?php echo $selectionError ?>
							<option value="Abs">Abs</option>
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
		<p>
			Sisu
		</p>
	</div>
</div>
<?php require("../footer.php"); ?>