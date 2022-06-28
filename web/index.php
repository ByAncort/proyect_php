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
    <form class="registe-form" method="post" action="rutinas.php" name="entrenador">
<?php echo "<p>Bienvenido soy tu entrenador personal</p>"; ?>
<?php echo "<h5>ingresa tus datos</h5>"; ?>
      <input type="text" placeholder="name" name="name" min="1" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122)"
/>
      <input type="text" placeholder="years" name ="years" maxlength="2" min="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
/>
      <input type="text" placeholder="kg" name="kg" min="2" maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
 />
      <input type="text" placeholder="height" name="height" min="2" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" 
/> 
      
   <button>enviar</button>
   </form>
   
    </div>
</div>






<!-- <style type="text/css" media="screen">
  @import 'style.css';
</style> -->


</body>
</html>