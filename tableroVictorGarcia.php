<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablero de ajedrez victor garcia</title>
</head>
<body>
<style>
    table {
        width: 500px;
        height: 500px;
        border-collapse: collapse;
    }

    td {
        width: 50px;
        height: 50px;
        text-align: center;
    }

    .blanca {
        background-color: whitesmoke;
    }

    .negra {
        background-color: black;
    }
</style>
    <h1>Tablero de Ajedrez de Victor Garcia</h1>
    <table>
    <?php
    $aLetras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
    echo "<tr><td></td>";
    foreach ($aLetras as $letra) {
        echo "<td>$letra</td>";
    }
    for ($fila=0; $fila < 8 ; $fila++) {
        echo"<tr>";
        echo "<td>".(8-$fila)."</td>";
        for ($colum=0; $colum < 8 ; $colum++) {
            $casilla = $fila + $colum;
        if ($casilla % 2 == 0) {
            $color = "blanca";
        }else{
            $color = "negra";
        }
        echo "<td class=$color></td>";
        };
        echo"</tr>";
    };

    ?>
    </table>
</body>
</html>