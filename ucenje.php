<?php

    $automobili = [
    "Zastava" => ["Yugo", "Skala", "101"],
    ];

    echo $automobili["Zastava"][0];


    $osobe = [
        "Stefa" => [
            "prezime" => "Kljajic",
            "godine" => 27,
            "programer" => true,
            "pravo_ime" => "Stefan"
        ],

        "Petar" => [
            "prezime" => "Jovanovic",
            "godine" => 34,
            "programer" => true,
            "pravo_ime" => "Pera",
            "jmbg" => 05051287381723
        ],
    ];

    echo $osobe["Stefa"]["godine"];
    echo $osobe["Petar"]["jmbg"];   

?>