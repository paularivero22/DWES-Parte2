
<?php
    if (isset($_POST['num']) && !empty($_POST['num']))  {
        $numero = $_POST['num'];

        if($numero % 2 == 0) {
            echo "$numero es par";
        } else {
            echo "$numero es impar";
        }
    }
?>