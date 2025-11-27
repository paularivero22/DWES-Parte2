<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $bandas = [
        "U2" => [
            "vocalista" => "Bono",
            "musicos" => ["The Edge", "Adam Clayton", "Larry Mullen Jr."]
        ],
        "Led Zeppelin" => [
            "vocalista" => "Robert Plant",
            "musicos" => ["Jimmy Page", "John Paul Jones", "John Bonham"]
        ],
        "Metallica" => [
            "vocalista" => "James Hetfield",
            "musicos" => ["Lars Ulrich", "Kirk Hammett", "Robert Trujillo"]
        ],
        "AC/DC" => [
            "vocalista" => "Brian Johnson",
            "musicos" => ["Angus Young", "Stevie Young", "Cliff Williams", "Phil Rudd"]
        ],
        "Queen" => [
            "vocalista" => "Freddie Mercury",
            "musicos" => ["Brian May", "John Deacon", "Roger Taylor"]
        ],
        "The Beatles" => [
            "vocalista" => "John Lennon",
            "musicos" => ["Paul McCartney", "George Harrison", "Ringo Starr"]
        ]
    ];
    ?>

    <h1>Bandas legendarias - componentes</h1>
    <form>
        <select id="banda" name="banda">
            <option value="u2">U2</option>
            <option value="ledZepellin">Led Zeppelin</option>
            <option value="metallica">Metallica</option>
            <option value="ac/dc">AC/DC</option>
            <option value="queen">Queen</option>
            <option value="theBeatles">The Beatles</option>
        </select>
    </form>
</body>

</html>