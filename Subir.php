<?php


if($_FILES["archivo"]["error"]>0){
	echo "error".$_FILES["archivo"]["error"]."<br>";

}
else{
	echo $_FILES["archivo"]["name"]."<br>";
	echo $_FILES["archivo"]["type"]."<br>";
	echo $_FILES["archivo"]["size"]."<br>";	
}
//move_uploaded_file($_FILES["archivo"]["tmp_name"]);


?>