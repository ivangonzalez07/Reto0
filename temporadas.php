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

<h1 class="izenburua"> VIKINGOS </h1>

<article>

		<table id="taula">
        <th>
      		Temporada
      	</th>
      	<th>
      		Imagen
      	</th>
      	<th>
      		Informacion
      	</th>
  			<tr>
    			<td>1</td>
          <td>N.º de episodios : 9<br>
              Primera emisión : 3 de marzo de 2013<br>
              Última emisión : 28 de abril de 2013
          </td>
  			</tr>
        <tr>
    			<td>Temporada 2</td>
          <td>askdhakjdhkashdkahdkakdhkashkjahkdhkaj</td>
  			</tr>
        <tr>
    			<td>Temporada 3</td>
          <td>askdhakjdhkashdkahdkakdhkashkjahkdhkaj</td>
  			</tr>

		</table>

</article>

<div id="bukaera">
<p> Creadores de la pagina: Endika, jon e ivan, gracias por visitar nuestra pagina web  </p>
</div>

</body>
</html>
