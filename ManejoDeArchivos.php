<html>
	<head>
		<title>Subir archivos con PHP</title>
	</head>
	<body>
	<?php
		 $archivo=fopen("TXT/archivo.txt","r");
		  echo fread($archivo, filesize("TXT/archivo.txt"));                                         

		fclose($archivo);
		
		?>
	</body>
</html>