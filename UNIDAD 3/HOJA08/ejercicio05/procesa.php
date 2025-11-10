
<?php
    if (isset($_POST['num']) && !empty($_POST['num']))  {
        $numero = $_POST['num'];

        for($i = 0; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero*$i);
            echo "<br/>";
        }
    }
?>