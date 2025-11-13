<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sumar 10 numeros</h1>
    <p>Introduce los 10 numeros (por defecto 1.. 10)</p>
    
    <form action="" method="post">
        <?php
            for($i = 1; $i <= 10; $i++) {
                echo "<input type='number' id='num$i' name='num$i' placeholder='$i'/> <br/> <br/>";                
            }
        ?>

        <input type="submit" value="Sumar" />
    </form>

    <?php 
        $numeros = array();
        $suma = 0;

        for($i = 1; $i <= 10; $i++) {
            $numeros[] = $_POST["num$i"];
        }

        foreach($numeros as $numero) {
            $suma += (int) $numero;
        }

        echo "Suma:" . $suma;
    ?>
</body>

</html>