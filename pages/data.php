<?php
require ("../functions.php");

require("../class/User.class.php");
$User = new User($mysqli);

if (!isset($_SESSION["userId"])) {
	header("Location: esileht.php");
}


	$exerciseError = "*"; 
	$repError = "*";


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























 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2"
	<br>
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
						<input class="form-control" name="exercise" placeholder="Exercise" type="text"> <?php echo $exerciseError ?>
					</div>
					
					<div class="row">
						<input class="form-control" name="reps" placeholder="Reps" type="number"> <?php echo $repError ?>
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
							<input class="form-control" name="food" placeholder="Toit" type="username">
					</div>
					
					<div class="row">
						<input class="form-control" name="calories" placeholder="Kalorite kogus" type="text">
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