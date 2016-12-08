<?php













 ?>

<?php require "../header.php"; ?>

<div class="container">
	<div class="col-md-2"
	<br>
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
						<input class="form-control" name="loginUsername" placeholder="Username" type="username" value="<?= $loginUsername; ?>">
					</div>
					
					<div class="row">
						<input class="form-control" name="loginPassword" placeholder="Password" type="password">
					</div>
					
					<br>
					
					<div class="row">
						<input class="btn btn-success btn-block" type="submit" value="Log in">
					</div>
				</div>
		</form>
		
		<br><br>
		
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
							<input class="form-control" name="signupUsername" placeholder="Username" type="username" value="<?=$signupUsername;?>">
					</div>
					
					<div class="row">
						<input class="form-control" name="signupPassword" placeholder="Password" type="password">
						<?php 
					
						?>
					</div>
					<br>
					
					<div class="row">
						<input class="btn btn-primary btn-block" type="submit" value="Sign up">
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