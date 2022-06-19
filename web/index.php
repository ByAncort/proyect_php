<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMBROS</title>
    <link rel="stylesheet" href="./estilos/style.css">
</head>

<body>
<!-- menu de inicio --->
<div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="rutinas.php" name="entrenador">
<?php echo "<p>Bienvenido soy tu entrenador personal</p>"; ?>
<?php echo "<h5>ingresa tus datos</h5>"; ?>
      <input type="text" placeholder="name" name="name" required/>
      <input type="number" placeholder="years" name ="years" maxlength="2" required/>
      <input type="number" placeholder="kg" name="kg" required/>
      <input type="text" placeholder="height" name="height" required/>
      
   <button>enviar</button>
   </form>
   
    </div>
</div>






<!-- <style type="text/css" media="screen">
  @import 'style.css';
</style> -->


</body>
</html>