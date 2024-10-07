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
        <input type="submit" value="Transormar">
        <br>
        <br>
    </form>

    <?php
        $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        if (isset($_POST['palabra'])) {
            $palabra = $_POST['palabra'];
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
</body>
</html>