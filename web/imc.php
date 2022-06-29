<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/imc.css">
    <link rel="stylesheet" href="./estilos/style-rutinas.css">
    <title>IMC</title>
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

<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="#" name="entrenador">
<?php echo "<p>Calcula tu imc</p>"; ?>
<?php echo "<h5>Ingresa tus datos</h5>"; ?>
      <input type="text" placeholder="Peso" name="peso"/>
      <input type="text" placeholder="Altura" name ="altura" maxlength="3" />
      
   <button>enviar</button>
   </form>
   
    </div>
</div>
<main>

</main>

</body>
</html>