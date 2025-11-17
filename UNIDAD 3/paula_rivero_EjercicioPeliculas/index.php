<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            max-width: 300px;
            max-height: 300px;
        }

        table {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $peliculas = [
        "El espíritu de la colmena" => [
            "año" => 1973, // año de estreno
            "sinopsis" => "Una niña en la posguerra española queda fascinada por la película 'Frankenstein' y vive entre realidad y fantasía." // breve descripción
        ],
        "Volver" => [
            "año" => 2006, // año de estreno
            "sinopsis" => "Drama de Pedro Almodóvar sobre la familia, los secretos y la supervivencia de varias mujeres en La Mancha." // descripción
        ],
        "Tristana" => [
            "año" => 1970,
            "sinopsis" => "Relación compleja entre una joven huérfana y su tutor; retrato de poder y dependencia."
        ],
        "La vaquilla" => [
            "año" => 1985,
            "sinopsis" => "Comedia satírica sobre la Guerra Civil española: un grupo intenta robar una vaca utilizada en una fiesta franquista."
        ],
        "Los otros" => [
            "año" => 2001,
            "sinopsis" => "Thriller gótico sobre una mujer y sus hijos fotosensibles que viven en una mansión aislada con secretos inquietantes."
        ],
        "El laberinto del fauno" => [
            "año" => 2006,
            "sinopsis" => "Fábula oscura ambientada en la posguerra: una niña encuentra un mundo fantástico mientras su madre sufre con la brutalidad del régimen."
        ],
        "Mar adentro" => [
            "año" => 2004,
            "sinopsis" => "Historia real de Ramón Sampedro, un hombre tetrapléjico que luchó por su derecho a morir dignamente."
        ],
        "Ocho apellidos vascos" => [
            "año" => 2014,
            "sinopsis" => "Comedia romántica sobre los choques culturales entre un sevillano y una joven vasca."
        ],
        "La lengua de las mariposas" => [
            "año" => 1999,
            "sinopsis" => "Relato tierno y amargo sobre la amistad entre un niño y su maestro en la víspera de la Guerra Civil."
        ],
        "Tesis" => [
            "año" => 1996,
            "sinopsis" => "Suspense universitario sobre una estudiante que investiga la morbosa fascinación por las imágenes violentas."
        ],
        "Celda 211" => [
            "año" => 2009,
            "sinopsis" => "Un guardia de prisiones se ve atrapado en un motín y debe hacerse pasar por reo para sobrevivir."
        ],
        "La piel que habito" => [
            "año" => 2011,
            "sinopsis" => "Thriller psicológico de Pedro Almodóvar sobre venganza y ética científica."
        ],
    ];

    $imagenes = [
        "El espíritu de la colmena" =>  "peliculas/el_espiritu_de_la_colmena.jpg",
        "Volver" => "peliculas/volver.jpg",
        "Tristana" =>  "peliculas/tristana.jpg",
        "La vaquilla" => "peliculas/la_vaquilla.jpg",
        "Los otros" => "peliculas/los_otros_the_others.jpg",
        "El laberinto del fauno" => "peliculas/el_laberinto_del_fauno.jpg",
        "Mar adentro" => "peliculas/mar_adentro.jpg",
        "Ocho apellidos vascos" => "peliculas/ocho_apellidos_vascos.jpg",
        "La lengua de las mariposas" => "peliculas/la_lengua_de_las_mariposas.jpg",
        "Tesis" => "peliculas/tesis.jpg",
        "Celda 211" => "peliculas/celda_211.jpg",
        "La piel que habito" => "peliculas/la_piel_que_habito.jpg",
    ];
    ?>


    <h1>Buscador de Peliculas</h1>
    <form action="$_SERVER['PHP_SELF']" method="post">
        <label for="buscador">Buscar por titulo: </label>
        <input type="text" name="buscador" id="buscador" /> <br /><br />

        <input type="submit" value="buscar" name="buscar">

    </form>

    <?php
    if (isset($_POST['buscador'])) {
        $busqueda = strtolower($_POST['buscador']);

        foreach ($peliculas as $pelicula => $descripcion) {
            if (str_contains(strtolower($pelicula), $busqueda)) {
                echo "
                <br/> <br/>
                    <table border='1'>
                    <tr>
                        <td>
                        <img src='" . $imagenes[$pelicula] . "'></img>
                        </td>
                        <td>
                            <h3>$pelicula ({$descripcion['año']})</h3>
                        </td>
                        <td>
                            <p>{$descripcion['sinopsis']}</p>
                        </td>
                    </tr>
                    </table>
                    ";
            }
        }
    }
    ?>
</body>

</html>