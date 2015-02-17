<?php 
require_once "php/utils.php";
$id = $_GET['id'];
if(isset($_POST["Edit"])){
	if(canEdit()){
			header("Location: edit.php?id=$id");
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
<input type="hidden" name="User" value="<?php echo $id?>">
<input  type="submit" class="button" name="Edit" value="Edit" />
</div>
<?php 
if(isset($_POST["Edit"])){
	if(!canEdit()){ 
	echo "<h4 style='color: red;'>Sorry, you are not allowed to edit.</h4>";
	}
}
?>		
</form>
</div>
</div>
<?php include "footer.php"?>