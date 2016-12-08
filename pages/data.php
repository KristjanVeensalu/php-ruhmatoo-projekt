<?php
require ("../functions.php");

if (!isset($_SESSION["userId"])) {
		echo $_SESSION["userId"];
		//header("Location: esileht.php");
	}
 ?>

<?php require ("../header.php"); ?>

<div class="container">
	<div class="col-md-2"
	<br>
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
						<input class="form-control" name="exercise" placeholder="Harjutus" type="text">
					</div>
					
					<div class="row">
						<input class="form-control" name="reps" placeholder="Kordused" type="number">
					</div>
					
					<div class="row">
						<input class="form-control" name="weight" placeholder="Raskused" type="number">
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