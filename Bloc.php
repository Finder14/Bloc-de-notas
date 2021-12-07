<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $direc = "Bloc files";
    
    if (!is_dir($direc)) {
        mkdir($direc);
        
        $ar = fopen("Bloc files/bloc.txt", "w") or die("Ha habido un problema en la creacion del archivo");
        $asu = $_REQUEST['asunto'];
        $desc = $_REQUEST['descripcion'];
        fwrite($ar, $asu);
        fwrite($ar, "\n");
        fwrite($ar, "\n");
        fwrite($ar, $desc);
        fwrite($ar, "\n");
        echo "Se ha creado correctamente el archivo";
        
    } else {
        
        echo "El directorio $direc ya existe.";
        
    }
    ?>
</body>

</html>