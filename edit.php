<?php 
require_once "php/utils.php";

$id = $_GET['id'];

if(isset($_POST["Edit"])){
		$summaryText = htmlspecialchars($_POST['summary']);
		$interestText = htmlspecialchars($_POST['interests']);
		writeToFile($id."summary.txt", $summaryText);
		writeToFile($id."interests.txt", $interestText);
		header("Location: user.php?id=$id");
			
	}	

	include "header.php"; 

	

?>

<div id="picture">
	<div class="profilePic">
	<img  src="assets/<?php echo $id?>.jpg" alt="User's profile picture" />
	</div>
</div>
<div id="content">
<div id="inner">
<?php 

	if($id == 1){ 
		echo "<h2 class='name'>User 1</h2>";
	}else if ($id == 2){ 
		echo "<h2 class='name'>User 2</h2>";
	}else{

	}
	?>
<form method="post">
<h3>Summary</h3>
<textarea class="txt" name="summary" rows='4' cols='50'><?php readFromFile($id.'summary.txt')?></textarea>
<h3>Interests</h3>
<textarea class="txt" name="interests" rows='4' cols='50'><?php readFromFile($id.'interests.txt')?></textarea><br />
<div class="btn">
<input type="submit" class="button" name="Edit" value="Done Editing" />
</div>		
</form>
</div>
</div>
<?php include "footer.php"?>