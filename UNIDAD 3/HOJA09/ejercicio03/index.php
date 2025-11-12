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
        "El Padrino" => [
            "año" => 1972,
            "sinopsis" => "La historia de la familia Corleone, una poderosa organización mafiosa en Nueva York."
        ],
        "Forrest Gump" => [
            "año" => 1994,
            "sinopsis" => "Un hombre con un corazón puro y un coeficiente intelectual bajo vive momentos clave de la historia de EE.UU."
        ],
        "Cadena Perpetua" => [
            "año" => 1994,
            "sinopsis" => "Un banquero injustamente condenado a prisión encuentra esperanza y amistad tras las rejas."
        ],
        "Pulp Fiction" => [
            "año" => 1994,
            "sinopsis" => "Historias entrelazadas de crimen, humor y violencia en Los Ángeles, narradas con estilo no lineal."
        ],
        "Gladiator" => [
            "año" => 2000,
            "sinopsis" => "Un general romano traicionado busca venganza en la arena del Coliseo como gladiador."
        ],
        "Origen" => [
            "año" => 2010,
            "sinopsis" => "Un ladrón que roba secretos a través de los sueños recibe la misión de implantar una idea en la mente de alguien."
        ],
        "El Señor de los Anillos: La Comunidad del Anillo" => [
            "año" => 2001,
            "sinopsis" => "Un joven hobbit hereda un anillo con un poder oscuro y debe destruirlo para salvar la Tierra Media."
        ],
        "Matrix" => [
            "año" => 1999,
            "sinopsis" => "Un programador descubre que su realidad es una simulación creada por máquinas que dominan el mundo."
        ],
        "Titanic" => [
            "año" => 1997,
            "sinopsis" => "Una historia de amor entre dos jóvenes de distintas clases sociales a bordo del trágico transatlántico."
        ],
        "La lista de Schindler" => [
            "año" => 1993,
            "sinopsis" => "Un empresario alemán salva a más de mil judíos durante el Holocausto empleándolos en su fábrica."
        ]
    ];

    $imagenes = [
        "El Padrino" =>  "peliculas/padrino.jpg",
        "Forrest Gump" => "peliculas/forrest.jpg",
        "Cadena Perpetua" =>  "peliculas/cadena.jpg",
        "Pulp Fiction" => "peliculas/pulpfiction.jpg",
        "Gladiator" => "peliculas/gladiator.jpg",
        "Origen" => "peliculas/origen.jpg",
        "El Señor de los Anillos: La Comunidad del Anillo" => "peliculas/anillos.jpg",
        "Matrix" => "peliculas/matrix.jpg",
        "Titanic" => "peliculas/titanic.jpg",
        "La lista de Schindler" => "peliculas/lista.jpg",
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