<?php
$nombre = "Dylan Leonel Andrade Lucas";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }

        h1 {
            color: #2c3e50;
        }

        img {
            margin-top: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
    </style>
</head>

<body>

    <h1>
        Hola mundo, soy <?php echo $nombre; ?>
    </h1>

    <img src="/carpeta_php/ImagenIA.png" alt="Imagen creada con IA">

</body>
</html>