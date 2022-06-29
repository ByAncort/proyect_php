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
          <!-- <li><a href="imc.php">Imc</a></li> -->
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
echo"<p>Te recomendamos empezar con pesos comodos para dominar la tecnica de una forma correcta.</p>";
  echo "<p>Caminar con mancuernas - mancuernas <br> 2 Sets x 00:40</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas <br> 2 Sets x 12 Reps</p>";
  echo "<p>Press de banca - barra de pesas <br> 2 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - con barra <br> 2 Sets x 12 Reps</p>";
  echo "<p>Remo inclinado - barra de pesas<br>2 Sets x 12 Reps</p>";
  echo "<p>Rueda de abdominales<br>2 Sets x 12 Reps</p>";


}elseif ($height >= 140 && $height <= 160) {
echo"<p>Te recomendamos empezar con pesos comodos para dominar la tecnica de una forma correcta.</p>";

  echo "<p>Sentadilla tradicional <br> 2 Sets x 20 Reps</p>";
  echo "<p>Levantamiento de peso muerto - mancuernas <br> 2 Sets x 12 Reps</p>";
  echo "<p>Press de banca - mancuernas <br> 2 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - con barra <br> 2 Sets x 12 Reps</p>";
  echo "<p>Remo inclinado - barra de pesas<br>2 Sets x 15 Reps</p>";
  echo "<p>Abdominales en el piso<br>2 Sets x 15 Reps</p>";

}else {
 echo "Estas en una desnutricion severa come mas<3";
}


echo "<h2>Intermedio</h2>";
//mayor sea tu peso mas podras levantar 
if ($kg >= 70){
echo"<p>Te recomendamos hacer los ejercicios con un peso exigente y en la ultima reps que llegues al fallo</p>";

  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";

}elseif ($kg >= 50 && $kg >=69){
echo"<p>Te recomendamos hacer los ejercicios con un peso exigente y en la ultima reps que llegues al fallo</p>";

  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";



}else{

  echo "No tienes el nivel suficiente para desbloquear esta seccion";
}

echo "<h2>avanzado</h2>";
if ($kg >= 81 && $kg <= 90){
echo"Te recomendamos que no levantes tanto peso sin una persona que te haga spotting";
  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";


}elseif ($kg >= 70 && $kg >=80){
echo"Te recomendamos que no levantes tanto peso sin una persona que te haga spotting";
  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";




}else{

  echo "No tienes el nivel suficiente para desbloquear esta seccion";
}



  echo "<h2>GymRats</h2>";
if ($kg >= 100 ){
  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";



}elseif ($kg >= 90 && $kg >=99){
  echo "<h2>Dia 1 - tren inferior</h2>";
  
  echo "<p>Elevacion de gluteos<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Sentadilla bulgara dividida - mancuernas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Levantamiento de peso muerto - barra de pesas<br> 3 Sets x 12 Reps</p>";
  echo "<p>Aductor de caderas sentado - maquina <br> 3 Sets x 12 Reps</p>";
  
  echo "<h2>dia 2 - tren superior</h2>";
  
  echo "<p>Elevacion lateral - mancuernas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 12 Reps</p>";
  echo "<p>Curl de biceps - barra de pesas <br> 3 Sets x 12 Reps</p>";
  echo "<p>Remos - barra de pesas<br>> 3 Sets x 12 reps</p>";
  echo "<p>Press frances <br> 3 Sets x 12 reps</p>";
  
  echo "<h2>dia 3 - tren superior</h2>";
  
  echo "<p>Abdominales <br> 3 Sets x 12 Reps</p>";
  echo "<p>Abdominales cruzados <br> 3 Sets x 8 Reps</p>";
  echo "<p>Press de pecho <br> 3 Sets x 8 Reps</p>";
  echo "<p>Pess de banca<br> 3 Sets x 8 Reps</p>";
  echo "<p>press de hombro con barra<br> 3 Sets x 8 Reps</p>";

}else{
  echo "No tienes el nivel suficiente para desbloquear esta seccion";
}

?>
  </main>

  </body>
</html>