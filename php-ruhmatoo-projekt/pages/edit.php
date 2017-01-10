<?php
	//edit.php
	require("functions.php");
	require("editFunctions.php");
	require_once("Helper.class.php");
	$Helper = new Helper();
	
	//kas kasutaja uuendab andmeid
	//if(isset($_POST["update"])){
		
		//updatePerson($Helper->cleanInput($_POST["id"]), $Helper->cleanInput($_POST["reps"]), $Helper->cleanInput($_POST["exercise"]));
		
		//header("Location: edit.php?id=".$_POST["id"]."&success=true");
       // exit();	
		
	//}
	
	//saadan kaasa id
	//$p = getSinglePersonData($_GET["id"]);
	//var_dump($p);
	
	//if(isset($_GET["delete"]))	{
		
		//deletePerson($_GET["id"]);
		
	//}

	
?>
<?php require("../header.php"); ?>
<br><br>
<a href="data.php"> back </a>

<h2>Muuda kirjet</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<input type="hidden" name="id" value="<?=$_GET["id"];?>" > 
  	<label for="reps" >reps</label><br>
	<input id="reps" name="reps" type="text" value="" ><br><br>
  	<label for="exercise" >exercise</label><br>
	<input id="exercise" name="exercise" type="text" value=""><br><br>
  	
	<input type="submit" name="update" value="Save">
	<input type="submit" name="delete" value="Delete">
  </form>
  
  <a href="?id=<?=$_GET["id"];?>&delete=true">delete</a>
  
 <?php require("../footer.php"); ?>