<?php
	$path = "Info.php";
	$path = "Subir.php";
?>
<html>
	<head>
		<title>Subir archivos con PHP</title>
	</head>
	<body>
	    <form action="<?php echo $path;?>" method ="post" enctype="multipart/form-data" >
		<input type ="file" name="archivo" />
	    <br/>
        <input type ="submit" value="subir" />
		</form>
	</body>
</html>