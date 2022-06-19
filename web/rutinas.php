<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMBROS</title>
    <link rel="stylesheet" href="./estilos/style-rutinas.css">
</head>
<body>


<nav>
        <ul id="menu" class="navbar">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="rutinas.php">Rutinas</a></li>
          <li><a href="imc.php">Imc</a></li>
          <li><a href="https://github.com/ByAncort">autor</a></li>
        </ul>
      </nav>

      <main>
      <?php
//guardar variables ingresadas en los input anteriores
$name= $_POST["name"]; //tambien se podria hacer con un readline pero no seria lo mismo
$years= $_POST["years"];
$kg= $_POST["kg"];
$height= $_POST["height"];

//rutinas
echo "<h1>Hola $name bienvenido a GymBro.net</h1>";
if ($years < 18){
  echo "<p>Usted es menor de edad por lo tanto no nos hacemos responsables de nada</p>";
}else{
}

echo "<h2>Principiante</h2>";

if ($height >= 180 || $height >=160){
  echo "<p>Caminar con mancuernas - mancuernas <br> 3 Sets x 00:40</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de banca - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - con barra <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remo inclinado - barra de pesas<br>3 Sets x 12 Reps</p>";
  echo "<p>Rueda de abdominales<br>3 Sets x 12 Reps</p>";


}elseif ($height >= 140 && $height <= 160) {

  echo "<p>Sentadilla tradicional <br> 3 Sets x 20 Reps</p>";
  echo "<p>Levantamiento de peso muerto - mancuernas <br> 4 Sets x 12 Reps</p>";
  echo "<p>Press de banca - mancuernas <br> 4 Sets x 10 Reps</p>";
  echo "<p>Sentadilla - con barra <br> 4 Sets x 10 Reps</p>";
  echo "<p>Remo inclinado - barra de pesas<br>3 Sets x 15 Reps</p>";
  echo "<p>Abdominales en el piso<br>3 Sets x 12 Reps</p>";

}else {
 echo "Estas en una desnutricion severa come mas<3";
}


echo "<h2>Intermedio</h2>";
//mayor sea tu peso mas podras levantar 
if ($kg >= 70){

  echo "<h2>Dia 1 - tren inferior</h2>";
  echo "<p>Elevacion de gluteos</p>";
  echo "<p>Sentadilla - barra de pesas</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas</p>";
  echo "<p>Aductor de caderas sentado - maquina</p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 15 Reps</p>";
  echo "<p>Tiron frontal - cable <br> 3 Sets x 12 Reps</p>";
  echo "<p>curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";

}elseif ($kg >= 50 && $kg >=69){

  echo "<h2>dia 1 - tren inferior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";

}else{

  echo "No tienes el nivel suficiente para desbloquiar esta seccion";
}

echo "<h2>avanzado</h2>";

if ($kg >= 81 && $kg <= 90){
  echo "<h2>dia 1 - tren inferior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";


}elseif ($kg >= 70 && $kg >=80){
  echo "<h2>dia 1 - tren inferior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";


}else{

  echo "No tienes el nivel suficiente para desbloquiar esta seccion";
}



  echo "<h2>GymRats</h2>";
if ($kg >= 100 ){
  echo "<h2>dia 1 - tren inferior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";


}elseif ($kg >= 90 && $kg >=99){
  echo "<h2>dia 1 - tren inferior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 2 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<h2>dia 3 - tren superior</h2>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";
  echo "<p></p>";


}else{
  echo "No tienes el nivel suficiente para desbloquear esta seccion";
}

?>
  </main>

  </body>
</html>