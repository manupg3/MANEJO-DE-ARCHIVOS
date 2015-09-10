<html>
	<head>
		<title>Subir archivos con PHP</title>
	</head>
	<body>
	<?php
		 $archivo=fopen("TXT/archivo.txt","r");
		  echo fread($archivo, filesize("TXT/archivo.txt"));                                         
         
		 fclose($archivo);
     
		  $archivo=fopen("TXT/archivo.txt","w+");
		   $esc=fwrite($archivo,"LUGAR DE NACIMIENTO: ADROGUE");
		   if($esc > 0)
		{
			echo "</br>SE PUDO ESCRIBIR EN EL ARCHIVO<br/>";			
		}
		 fclose($archivo);
		 
		  $path_origen="TXT/archivo2.txt";
		  $path_destino="TXT/archivo3.txt";
		  
		  $copiar= copy($path_origen,$path_destino);
		  
		  $path="TXT/archivo3.txt";
		  unlink($path);
		  
         		 
		?>
		 
	</body>
</html>