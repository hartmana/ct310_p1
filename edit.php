<?php 
require_once "php/utils.php";

/*User and edit page require the use of id query strings to differentiate users. 
e.g. user.php?id=1 -> User 1
	 user.php?id=2 -> User 2
*/

$id = $_GET['id']; //get id query string from URL

if(isset($_POST["Edit"])){//if user has submitted edit form
		$summaryText = htmlspecialchars($_POST['summary']); //sanitize summary text
		$interestText = htmlspecialchars($_POST['interests']); // santize interests text
		writeToFile($id."summary.txt", $summaryText); //write summary to file (id + summary (e.g. 1summary.txt for User 1))
		writeToFile($id."interests.txt", $interestText); //write interests to file
		header("Location: user.php?id=$id"); //redirect back to user page, with proper ID query string
			
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
		}else{}
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