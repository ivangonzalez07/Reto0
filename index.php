<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">

<meta charset="utf-8"/>

<?php
		$time = time();
?>

<title>VIKINGOS</title>
</head>


<body id="body">


	<nav id="menu">
	      <ul>
	          <li><a href="index.html">ENTRADA</a></li>
	          <li><a href="temporadas.html">TEMPORADAS</a></li>
	          <li><a href="actores.html">ACTORES</a></li></li>
	          <li><a href="productos.html">MERCHANDISING</a></li>
	          <li><a href="videos.html">VIDEOS Y ENLACES</a></li>
						<li><?php echo (date("H:i:s", $time)); ?></li>
	      </ul>
	 </nav>

<h1 class="izenburua"> VIKINGOS </h1>

<article>

		<table id="taula">
  			<tr>
    			<td><h2><u>Serie Vikingos</u></h2>
    				<br>
    				<br>
    				<img src="./imagenes/vikin.jpg" alt="katalogo" width="500" />
    				<br>
    				<br>
    				<p>Vikings es una serie de televisión de drama histórico creada y escrita por Michael Hirst.<br>Vikings está inspirada en las sagas del vikingo Ragnar Lodbrok, uno de los héroes nórdicos legendarios más conocidos y notorio como el flagelo de Inglaterra y Francia.
							El programa retrata a Ragnar como un granjero que alcanza la fama con incursiones exitosas en Inglaterra, y finalmente se convierte en un rey escandinavo, con el apoyo de su familia y sus guerreros.</p>

    			</td>
  			</tr>

		</table>

</article>

<div id="bukaera">
<p> Creadores de la pagina: Endika, jon e ivan, gracias por visitar nuestra pagina web  </p>
</div>

</body>
</html>
