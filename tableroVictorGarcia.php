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
    // Fila superior con letras
    echo "<tr><td></td>";
    foreach ($aLetras as $letra) {
        echo "<td>$letra</td>";
    }
    echo "<td></td></tr>";

    //filas
    for ($fila = 0; $fila < 8; $fila++) {
        echo "<tr>";
        // Número a la izquierda
        echo "<td>" . (8 - $fila) . "</td>";
        // Casillas
        for ($colum = 0; $colum < 8; $colum++) {
            $casilla = $fila + $colum;
            if ($casilla % 2 == 0) {
                $color = "blanca";
            } else {
                $color = "negra";
            }
            echo "<td class=$color></td>";
        }
        // Número a la derecha
        echo "<td>" . (8 - $fila) . "</td>";
        echo "</tr>";
    }

    // Fila inferior con letras
    echo "<tr><td></td>";
    foreach ($aLetras as $letra) {
        echo "<td>$letra</td>";
    }
    echo "<td></td></tr>";
    ?>
    </table>
</body>
</html>