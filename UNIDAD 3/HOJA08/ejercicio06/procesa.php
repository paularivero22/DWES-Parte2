<?php
if (isset($_POST['menor']) && isset($_POST['mayor'])) {
    $menor = (int)$_POST['menor'];
    $mayor = (int)$_POST['mayor'];

    if ($menor < $mayor) {
        echo "<h1>Pares de números:</h1>";

        for ($i = $menor, $j = $mayor; $i <= $mayor; $i++, $j--) {
            echo "($i, $j) <br/>";
        }
    } else {
        echo "<h3>El número menor no puede ser mayor que el número mayor.</h3>";

    }
} else {
    echo "Por favor, vuelve al formulario y completa ambos números.";
}
