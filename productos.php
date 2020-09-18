<!DOCTYPE html>
<html lang="eu">
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">

<meta charset="utf-8"/>

<?php
    date_default_timezone_set('Australia/Adelaide');
    $time = time();
?>

<title>VIKINGOS</title>
</head>


<body id="body">


    <nav id="menu">
          <ul>
              <li><a href="index.php">ENTRADA</a></li>
              <li><a href="temporadas.php">TEMPORADAS</a></li>
              <li><a href="actores.php">ACTORES</a></li></li>
              <li><a href="productos.php">MERCHANDISING</a></li>
              <li><a href="videos.php">VIDEOS Y ENLACES</a></li>
                        <li id="horaservidor"><?php
                            echo date("H:i:s", $time);
                            echo "<br>";
                            echo date("Y/m/d");
                        ?></li>
          </ul>
     </nav>

<h1 class="izenburua"> MERCHANDISING </h1>

<article>

		<table id="taula">
			<th>
				Producto
			</th>
			<th>
        Imagen
			</th>
			<th>
				Precio
			</th>
  			<tr>
    			<td>Camiseta Vikingos</td>
    			<td><img src="imagenes/camiseta-vikingos.jpg"></td>
					<td>25€</td>
  			</tr>
				<tr>
					<td>Sudadera Vikingos</td>
					<td><img src="imagenes/sudadera-vikingos.jpg"></td>
					<td>40€</td>
				</tr>
				<tr>
					<td>Gorra Vikingos</td>
					<td><img src="imagenes/gorra-vikingos.jpg"></td>
					<td>12€</td>
				</tr>
		</table>

</article>

<div id="bukaera">
<p> -Egilea: Ivan Gonzalez / Telegonoa: 943256487 / TWITTER= @inbentarioaivan / Eskerrikasko gure dendan erosteagatik!!  </p>
</div>

</body>
</html>
