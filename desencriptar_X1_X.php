<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<form action="" method="post">
    <input type="text" name="entrada" required>
    <input type="submit">
</form>

<?php
    if(isset($_POST['entrada'])) {

    
    $entrada = $_POST['entrada'];
    echo "<br> Frase introducida: ".$entrada ."<br><br>";
    $longitud = strlen($entrada);
    $array = str_split($entrada);
    $contador = 0;

    for ($i=0; $i < $longitud; $i++) { 
        if($contador % 2 == 0) {
            $par[$contador] = $array[$contador];
        } else {
            $imPar[$contador] = $array[$contador];

        }
        $contador = $contador+1;
    }

$buenas = implode($imPar);
echo "Primera desencriptacion: ".implode($par).strrev($buenas);
}
?>

</body>
</html>










