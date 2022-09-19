<?php 
$servername = "127.0.0.1";
$database = "inventario";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password, $database);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href= />
    <title>Dashboard</title>
</head>
<body>
    <header>
    <a href="index2.php">        
<img class="img" src="img/logo.png"></a>
        <div class="btns">
        <a href="materiales.php"><input class="btns11" type="button" value="Materiales" ></a>
        <a href="inventario.php"><input type="button" class="btns1" value="inventario"></a>
        <a href="entradas.php"><input type="button" value="Entradas" class="btns2"></a>
        <a href="salidas.php"><input type="button" value="Salidas" class="btns2"></a>
        </div>
    </header>
<br><br><br><br><br><br>
    <div class="agregar">
        <h2>Agregar Material</h2>
        <button id="myBtn"> AGREGAR </button>
    </div>
    
<!--table-->
<div class="container">
  <h1>Materiales</h1>
<table class="table-scroll small-first-col">
  <thead>
    <tr>
    <th>Codigo</th>
    <th>Descripcion</th>
    <th>Aporte</th>
    </tr>
  </thead>
  <tbody class="body-half-screen">
  <?php
      $sql="SELECT * FROM agregar";
      $result= mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
      ?>
    <tr>
        <td><?php echo $mostrar['cod']?></td>
        <td><?php echo $mostrar['des']?></td>
        <td><?php echo $mostrar['aporte']?></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
  <!-- Modal content -->
  <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1 id="HoraActual1"> </h1>
    <h1 id="HoraActual1"> </h1>
    <h1>Salidas de Materiales</h1>
    <form  action="index2.php" method="post"  class="agregar-materiales">
              <label>Codigo</label> &nbsp; <br> <input class="code" type="text" name="codigo" required> <br>
              <Label>Descripcion</Label> &nbsp; <br>  <input class="desc" type="text" name="descripcion" required> <br>
              <label>Aporte</label> <br> <select class="apo" name="aporte">
                  <option>Air-e</option>
                  <option>Contrata</option>
              </select> 
            
            <br>
            <input type="submit" value="Guardar" class="guardar">
            <input type="reset" value="reset"></form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>