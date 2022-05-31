<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actas</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php 
$consumo= $_POST['consumo'];
$paneles = round($consumo*0.0092165898617512);
$baterias = round($consumo*0.0207373271889401);
?>	
	<div id="imp">
	<div  class="ban"><!--Los que tengan "---" serán los que hay que poner los resultados con la base de datos-->
		<img src="img/fd1.jpg" width="1366" height="200" />
		<center><h1><font color="black">Titulo:</font></h1>
			<h2><font color="gray"> <?php echo $consumo?> kWh</font></h2>
			<h3><font color="black">Paneles solares que necesitas:</font></h3>
			<h4><font color="gray"> <?php echo $paneles?> paneles solares de 450w</font></h4>
			<h3><font color="black">Baterías que necesitas:</font></h3>
			<h4><font color="gray"><?php echo $baterias?> baterías de 150Ah</font></h4><br><br>	
		</center>
	</div>
	</div>
			
			<center>
			<h4><font color="gray"> Puede cotizar precios <u><a href="https://rosensolar.en.made-in-china.com/?keyword=solar%20panel&gclid=CjwKCAiAwKyNBhBfEiwA_mrUMrxhroUZc6ohz8ilkx6OhrqetoHxcQWD4nCE4kv3NV0vfgyG3gz1vhoCyskQAvD_BwE" style="color:black;">Aquí</a></u></font></h4>
			<br><h4><a class="boton" onclick="javascript:imprim(imp)">Imprimir</a></h4><br>
			<button type="submit" name="regreesa" class="boton" onclick="window.location.href='index.php'">INICIO</button>
			</center>

			<script>
			function imprim(imp){
			var printContents = document.getElementById('imp').innerHTML;
        	w = window.open();
        	w.document.write(printContents);
        	w.document.close(); // necessary for IE >= 10
        	w.focus(); // necessary for IE >= 10
			w.print();
			w.close();
        	return true;}
			</script>
</body>
</html>
