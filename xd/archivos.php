<html>
<head>
    <meta charset="UTF-8">
    <?php
    $car = $_REQUEST['carpeta'];
    if (is_dir($car)) {
        echo "La carpeta ya existe.";
        echo "<br>";
      } else if (mkdir($car, 0777, true)) {
        echo "Carpeta creada con exito.";
        echo "<br>";
      } else{
        echo "La carpeta no pudo ser creada.";
        echo "<br>";
      }
    $asu = $_REQUEST['asunto'] . '.txt';
    $ar = fopen($asu, "w");
    $con = $_REQUEST['contenido'];

    fwrite($ar, $con);
    echo "================================";
    echo "<br>";
    echo "El archivo fue creado con exito.";
    echo "<br>";
    echo "================================";
    echo "<br>";
    ?>
</head>
<body>

</body>
</html>