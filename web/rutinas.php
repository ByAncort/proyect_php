<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMBROS</title>
    <link rel="stylesheet" href="./style-rutinas.css">
</head>
<body>


<nav>
        <ul id="menu" class="navbar">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="">Entrenamientos</a>
            <ul class="subMenu">
              <li><a href="">Cardio</a></li>
              <li><a href="">Fuerza</a></li>
              <li><a href="">Definicion</a></li>
            </ul>  
          </li>
          <li><a href="">Tutoriales</a></li>
          <li><a href="">Contacto</a></li>
        </ul>
      </nav>

      <main>
<!-- codio php--->
      <?php
//guardar variables ingresadas en los input anteriores
$name= $_POST["name"]; //tambien se podria hacer con un readline pero no seria lo mismo
$years= $_POST["years"];
$kg= $_POST["kg"];
$height= $_POST["height"];
echo "<h1>cardio</h1>";

?>
  </main>

  </body>
</html>