<?php
    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="")
    {
       if ($_POST["operador"] == "suma")
       {
           echo "El resultado de la suma es: <br>";
           echo $resultado = $_POST ["VALOR1"] + $_POST ["valor2"];
           echo "<br /><a href="index.php">volver</a>";
       }
          elseif ($_POST["operador"] == "resta")
       {
           echo "El resultado es: <br>";
           echo $resultado = $_POST ["VALOR1"] + $_POST ["valor2"];
           echo "<br /><a href="index.php">volver</a>";
       }
           elseif ($_POST["operador"] == "multiplicacion")
       {
           print ("El resultado es: <br>");
           print ($resultado = $_POST ["VALOR1"] + $_POST ["valor2"]);
           print ("<br /><a href="index.php">volver</a>");
       }
           elseif ($_POST["operador"] == "division")
       {
           print( "El resultado es: <br>");
           print ($resultado = $_POST ["VALOR1"] + $_POST ["valor2"]);
           print ("<br /><a href="index.php">volver</a>");
       }
      }
      else
      {
        print ("Ingresa alg&uacate;n valor");
        print ("<br /><a href="index.php">volver</a>");
      }
