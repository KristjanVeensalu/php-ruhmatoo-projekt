<?php
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
	$foodError = "";
	$caloriesError = "";
	
if (isset ($_POST["Exercise"]))
		{
		if( empty ($_POST["Exercise"])){
			$exerciseError = "Field must be filled";}
		}
if (isset ($_POST["Reps"]))
		{
		if( empty ($_POST["Reps"])){
			$repError = "Field must be filled";}
		}
if (isset ($_POST["Selection"]))
			{
		if (empty ($_POST["Selection"])){
			$selectionError = "Field must be filled";}	
			}
		
		
		
		
if($exerciseError == ""  &&
	$repError == ""	&&
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
					
					header("Location: data.php");}
	if (isset ($_POST["Food"])&&
		isset ($_POST["Calories"]))
		{
			
			$Food = $_POST["Food"];
			$Calories = $_POST["Calories"];
			$data->dataentryFood ($Helper->cleanInput($Food), $Helper->cleanInput($Calories), $Helper->cleanInput($email));
			header("Location: data.php");
			
		}
	

 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2">
		<?php
			if (isset($_SESSION["userId"])) {?>
				<div class="row">
					<button type="button" class="btn btn-block" style="background-color:black"><a href="?logout=1"><font style="color:white">Log out</font></a>
				</div>
				<br>
			<?php } ?>
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
			<div class="input-group input-group-sm">
				<div class="row">
					<input class="form-control" name="Exercise" placeholder="Exercise" type="text"> <?php echo $exerciseError ?>
				</div>
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
							<input class="form-control" name="Food" placeholder="Food" type="username"> <?php echo $foodError ?>
					</div>
					
					<div class="row">
						<input class="form-control" name="Calories" placeholder="Calories" type="text"> <?php echo $caloriesError ?>
					</div>
					<br>
					
					<div class="row">
						<input class="btn btn-primary btn-block" type="submit" value="Sisesta">
					</div>
				</div>
		</form>
	</div>
	
	<div class="col col-xs-offset-3">

	<h1>History</h1>
	
	
<?php 
$view = $data->getAllDataFood($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Food</h3>";
			$html .= "<th>Food</th>";
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

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Abs</h3>";
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
	
$view = $data->getAllDataShoulders($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Shoulders</h3>";
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
	
$view = $data->getAllDataChest($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Chest</h3>";
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
	
$view = $data->getAllDataLegs($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Legs</h3>";
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

	
$view = $data->getAllDataBack($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Back</h3>";
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
	
$view = $data->getAllDataCore($email);

	$html = "<table class='table table-striped'>";
	
		$html .= "<tr>";
			$html .= "<h3>Core</h3>";
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