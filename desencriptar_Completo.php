<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="palabra" required>
        <input type="submit" name="conv1" value="Conversión 1">
        <input type="submit" name="conv2" value="Conversión 2">
        <input type="submit" name="convf" value="Conversión Total">
        <br>
        <br>
    </form>
    <?php
        if (isset($_POST['conv1']) && isset($_POST['palabra'])) {
            $palabra = $_POST['palabra'];
            $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $array2 = str_split($palabra);
            $pos = 0;
            $cont = 0;
            $trozo = "";
            $resultado = "";
            echo "Palabra introducida: ".$palabra."<br>";

            $longitud = strlen($palabra);

            for ($i = 0; $i < $longitud; $i++) {
                if (!in_array($array2[$i], $vocales)) {
                    $trozo = $trozo.$array2[$i];
                } else {
                    $vocal = $array2[$i];
                    $resultado = $resultado.strrev($trozo).$vocal;
                    $trozo = "";
                }
            }
            $resultado = $resultado.strrev($trozo);
            echo "Palabra convertida: ".$resultado."<br>";
        }
    ?>
    <?php
        if(isset($_POST['conv2']) && isset($_POST['palabra'])) {

        
            $palabra = $_POST['palabra'];
            echo "<br> Frase introducida: ".$palabra ."<br><br>";
            $longitud = strlen($palabra);
            $array = str_split($palabra);
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
    <?php
        if(isset($_POST['convf']) && isset($_POST['palabra'])) {
            $palabra = $_POST['palabra'];
            echo "<br> Frase introducida: ".$palabra ."<br><br>";
            $longitud = strlen($palabra);
            $array = str_split($palabra);
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
            echo "Primera desencriptacion: ".implode($par).strrev($buenas)."<br>";

            $buenas = implode($imPar);
            $par = implode($par);
            $resultado2 = $par.strrev($buenas);
            $palabra = $resultado2;
            $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $array2 = str_split($palabra);
            $pos = 0;
            $cont = 0;
            $trozo = "";
            $resultado = "";

            $longitud = strlen($palabra);

            for ($i = 0; $i < $longitud; $i++) {
                if (!in_array($array2[$i], $vocales)) {
                    $trozo = $trozo.$array2[$i];
                } else {
                    $vocal = $array2[$i];
                    $resultado = $resultado.strrev($trozo).$vocal;
                    $trozo = "";
                }
            }
            $resultado = $resultado.strrev($trozo);
            echo "Palabra final: ".$resultado."<br>";
        }
    ?>
</body>
</html>