<?php 
require_once "php/utils.php";
/*User and edit page require the use of id query strings to differentiate users. 
e.g. user.php?id=1 -> User 1
	 user.php?id=2 -> User 2
*/
$id = $_GET['id']; //get id query string from URL
if(isset($_POST["Edit"])){ //if edit button has been clicked
	if(canEdit()){ //check if user has edit permission
			header("Location: edit.php?id=$id"); //redirect to edit page
			return;
	}
}	
include "header.php"; 
?>
<div id="picture">
	<div class="pPic">
	<img width="70%" src="assets/<?php echo $id?>.jpg" alt="User's profile picture" />
	</div>
</div>
<div id="content">
	<div id="inner">
		<h3>Summary</h3>
		<p><?php  readFromFile($id . 'summary.txt')?></p>
		<h3>Interests</h3>
		<p><?php  readFromFile($id . 'interests.txt')?></p>
		<form method="post">
		<div class="btn">
			<input  type="submit" class="button" name="Edit" value="Edit" />
		</div>
		<?php 
		if(isset($_POST["Edit"])){
			if(!canEdit()){ //if user cannot edit, display error message
				echo "<h4 style='color: red;'>Sorry, you are not allowed to edit.</h4>";
			}
		}
		?>		
		</form>
	</div>
</div>
<?php include "footer.php"?>