<?php 
/* 
Site wide utilities. 
Spring 2015
By Peter Fiorella
*/
//checks if user has permission to edit files, based on IP address
//returns: TRUE if user can edit
function canEdit(){
	$ip = $_SERVER["REMOTE_ADDR"]; //get user's IP address
	$ipArray = explode(".", $ip); //tokenize IP by '.'
	if($ipArray[0] == "129" && $ipArray[1] == "82" || $ipArray[0] == "10" && $ipArray[1] == "84"){ //check if first half of user's IP is from the CS departments IP range (e.g. 129.82.XXX.XXX)
		return true;
	}else{
		return true; //set to true for testing, set to false for production
	}
}


//writes user text to file
//$fname: filename to write to
//$text: user text to write to file
function writeToFile($fname, $text){
	if(!file_exists($fname)) { //if file does not exist...
        touch($fname); //...create it
    }
    $fileout = fopen($fname,'w'); //open file in write mode
  	fwrite($fileout,$text); //write $text var to file
   	fclose($fileout); // close file
    
  
}
//reads in text from file
//$fname: filename to read from
//echos: file contents as string
function readFromFile($fname){
	if(file_exists($fname) && filesize($fname) != 0){ //make sure file exists and that it's not empty
		$filein = fopen($fname,'r'); //open file in read mode
   		$fileContents = fread($filein,filesize($fname)); // read file contents to $fileContents
   		fclose($filein); //close file
  		echo $fileContents; //echo the file contents
	}
}
?>

