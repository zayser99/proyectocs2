<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
	$mysqli= new mysqli("localhost","root","","pruebadbcs2");
	if(mysqli_connect_errno()){
		echo "no se pudo conectar";
	}
?>
<body>
</body>
</html>