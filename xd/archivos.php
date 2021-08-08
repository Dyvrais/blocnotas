<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador de archivos txt</title>

    <?php
    $car = $_REQUEST['carpeta'];
    if (is_dir($car)) {
        echo "La carpeta ya existe. <br>";
      } else if (mkdir($car, 0777, true)) {
        echo "Carpeta creada con exito. <br>";
      } else{
        echo "La carpeta no pudo ser creada. <br>";
      }

    $asu = $_REQUEST['asunto'] . '.txt';
    $con = $_REQUEST['contenido'];
    $ar = fopen($asu, "w");

    echo "================================ <br>";

    if (file_exists($asu)) {
      echo "El archivo fue escrito con exito. <br>";
      fwrite($ar, $con);
    } else{
      echo "El archivo no pudo ser creado. <br>";
    }
    echo "================================ <br>";
    echo "Contenido del archivo " . $asu . ": <br>";
    echo file_get_contents("$asu");
    ?>
</head>
<body>
</body>
</html>