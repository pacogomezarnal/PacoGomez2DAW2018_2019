<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function mensajeError($texto){
      echo ("<h3>".$texto."</h3><br>");
      echo ("<a href='index.html'>Utiliza el formulario para rellenarlas</a>");
    }
    //El primer paso es comprobar si existen las variables
    if(empty($_POST["red"])||empty($_POST["green"])||empty($_POST["blue"])) {
      mensajeError("No existen las variables o están vacías");
    }else{
      //Ya podemos almacenar las variables ya que existen
      $R=$_POST["red"];
      $G=$_POST["green"];
      $B=$_POST["blue"];
      //Comprobamos que son numeros
      if(!is_numeric($R)||!is_numeric($G)||!is_numeric($B)){
        mensajeError("Las variables no son numéricas");
      }else{
        //Comprobación de rango
        if(($R<0||$R>255)||($G<0||$G>255)||($B<0||$B>255)){
          mensajeError("Variables fuera de rango");
        }else{
          echo ("<h3>Tu color es</h3><br>");
          echo "<div>". sprintf('#%02x%02x%02x', $R,$G,$B)."</div>";
          echo "<div style= 'height:100px; background-color:rgb($R,$G,$B);'></div>";
        }
      }
    }
    ?>
  </body>
</html>
