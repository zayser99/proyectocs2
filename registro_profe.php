<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro profesor</title>
	<style type="text/css">
		body
		{
			background-image: url(https://s1.1zoom.me/b5149/175/School_White_background_Pencils_Multicolor_568201_1600x1200.jpg);background-position: center center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;
		}
		.boton input
		{
			width: 230px;
			height: 50px;
			text-align: center;
			font-size: 2em; font-weight: bold;
			font-family: Oswald;
			line-height: 1.6em;
			background-color: green;
			border-radius: .5em;
			cursor: pointer;
			transition: background-color 1s;
		}
		.boton input:hover
		{
			background-color: red;
		}
		.linea
		{
			display: inline-block;
		}
		p
		{
			font-size: 2em;
			font-weight: bold;
			font-family: Oswald;
		}
	</style>
</head>
<body>
<?php
error_reporting(0);
session_start();

$usuario = $_SESSION['user'];

if(!isset($usuario)){
#header( "refresh:1;url=".$_SERVER['PHP_SELF'] );
}else{
echo ($usuario);
header("location: Index.php");
}
?>	
	<div>
		<center><font face="Oswald"><h1 class="titulo">REGISTRO PROFESOR</h1></font>
			<img src="https://cdn.icon-icons.com/icons2/2104/PNG/512/manager_icon_129392.png" style="width: 230px; height: 230px;">
		</center>
	</div><br>

	<center><form action="p_registro.php" method="POST" name="registro">
		<p><font face="Oswald" size="6"><b><i>Nombre: <input type="text" name="name" size="30" style="height: 30px;" onkeypress="return sololetra(event);" required></i></b></font></p>
		<p><font face="Oswald" size="6"><b><i>Apellido: <input type="text" name="ape" size="30" style="height: 30px;" onkeypress="return sololetra(event);" required></i></b></font></p>
		<p><font face="Oswald" size="6"><b><i>Numero: <input type="text" name="telr"  size="30" style="height: 30px;"  onkeypress="return solonumero(event);" required></i></b></font></p>
		<p><font face="Oswald" size="6"><b><i>Correo: <input type="text" name="correo" size="30" style="height: 30px;" onblur="pruebaemail(correo.value);" required></i></b></font></p>
		<p><font face="Oswald" size="6"><b><i>Usuario: <input type="text" name="user" size="30" style="height: 30px;" required></i></b></font></p>
		<p><font face="Oswald" size="6"><b><i>Contraseña: <input type="password" name="password" size="30" style="height: 30px;" required></i></b></font></p>		
		<div class="boton">
			<input type="submit" name="ingresar" value="Registrar" />
		</div>
		</form>
	</center><br><br>

	<center><div class="boton">
		<form action="IndexPrincipal.php" method="POST" class="linea">
			<input type="submit"  value="Regresar" />
		
	</div></center>
	<script type="text/javascript">
	
	function solonumero(evt){   
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // para borrar
      return true;
    } else if(code>=48 && code<=57) { // condicion de solo numeros
      return true;
    } else{ // que no lo haga
    alert("Tiene que escribir su telefono con solo numeros")
      return false;
    }
}


	function sololetra(evt){   
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // para borrar
      return true;
    } else if(code>=97 && code<=122) { // condicion de solo letra minuscula
      return true;
    } else if (code>=65 && code<=90) { // condicion de solo letra mayuscula
      return true;
    }else if (code==32) { // condicion de espacio
      return true;
    }else{ // que no lo haga
    alert("Tiene que escribir solo con letras")
      return false;
    }
}

	
	function noespecial(evt){   
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // para borrar
      return true;
    } else if(code>=48 && code<=57) { // condicion de solo numeros
      return true;
    } else if(code>=97 && code<=122) { // condicion de solo letra minuscula
      return true;
    } else if (code>=65 && code<=90) { // condicion de solo letra mayuscula
      return true;
    }else if (code==32) { // condicion de espacio
      return true;
    }else{ // que no lo haga
    alert("Solo escribe con letras y numeros")
      return false;
    }
}

	
	function solonumerotel(evt){   
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) { // para borrar
      return true;
    } else if(code>=48 && code<=57) { // condicion de solo numeros
      return true;
    } else{ // que no lo haga
    alert("Tiene que escribir su numero con solo numeros")
      return false;
    }
}

	
	function diez(){   
		if (document.fvalida.tel.value.length<10 || document.fvalida.tel.value.length>10){
      		alert("Tiene que escribir su telefono a 10 digitos")
      		document.fvalida.tel.focus()
      		return 0;
   	}

   	//el formulario se envia
   	alert("Formulario enviado");
   	document.fvalida.submit();
    
}

function pruebaemail (valor){
	re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
	if(!re.exec(valor)){
		alert('email no valido');
	}
	else return true;
	}
</script>	
</body>
</html>