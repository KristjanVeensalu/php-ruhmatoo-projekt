<?php
require("../functions.php");

require("../class/User.class.php");
$User = new User($mysqli);

$signupUsername = "";
$signupError = "";
$signupPasswordError = "";

if(isset($_POST["signupUsername"]) &&
	!empty($_POST["signupUsername"])) {
	$signupUsername = $_POST["signupUsername"];
} if(isset($_POST["signupUsername"]) &&
	empty($_POST["signupUsername"])) {
	$signupError = "Fields must be filled";
}

if(isset($_POST["signupPassword"]) &&
	!empty($_POST["signupPassword"])) {
	$signupPassword = $_POST["signupPassword"];
} if(isset($_POST["signupPassword"]) &&
	empty($_POST["signupPassword"])) {
	$signupError = "Field must be filled";
}

if(isset($_POST["signupPassword"])){
	if(empty($_POST["signupPassword"]))
	$signupError = "Fields must be filled";
	} if(isset($_POST["signupPassword"]) &&
	!empty($_POST["signupPassword"]) &&
	strlen($_POST["signupPassword"]) <8){
		$signupError = "";
		$signupPasswordError = "Password must be longer than 8 symbols";
}

$loginUsername = "";
$loginError = "";

if(isset($_POST["loginUsername"]) &&
	!empty($_POST["loginUsername"])) {
	$loginUsername = $_POST["loginUsername"];
} if(isset($_POST["loginUsername"]) &&
	empty($_POST["loginUsername"])) {
	$loginError = "Fields must be filled";
}

if(isset($_POST["loginPassword"]) &&
	!empty($_POST["loginPassword"])) {
	$loginPassword = $_POST["loginPassword"];
} if(isset($_POST["loginPassword"]) &&
	empty($_POST["loginPassword"])) {
	$loginError = "Fields must be filled";
}

if ($signupError == "" &&
	$signupPasswordError == "" &&
	isset($_POST["signupEmail"]) && 
	isset($_POST["signupPassword"])) {
		$password = hash("sha512", $_POST["signupPassword"]);
		$User->signup($signupEmail, $password);
	}

$notice = "";

?>
<?php require "../header.php"; ?>

<div class="container">
	<div class="col-md-2">
	<br>
		<form method="POST">
				<div class="input-group input-group-sm">
					<div class="row">
						<input class="form-control" name="loginUsername" placeholder="Username" type="username" value="<?= $loginUsername; ?>">
					</div>
					
					<div class="row">
						<input class="form-control" name="loginPassword" placeholder="Password" type="password">
					</div>
					<?php
						echo $loginError;
						echo $notice;
					?>
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
						echo $signupError;
						echo $signupPasswordError;
						?>
					</div>
					<br>
					
					<div class="row">
						<input class="btn btn-primary btn-block" type="submit" value="Sign up">
					</div>
				</div>
		</form>
	</div>
	
	<div class="col col-xs-offset-1 col-xs-7">
		<h2>Pealkiri</h2>
		<p>Sisu</p>
	</div>
</div>
<?php require("../footer.php"); ?>