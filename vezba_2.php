<?php

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
            "jmbg" => 23239823
        ],
    ];

    echo $osobe["Stefa"]["godine"];
    echo $osobe["Petar"]["jmbg"];

    $osobe["Nikola"] = [
        "prezime" => "Dzonic",
        "godine" => 28,
        "programer" => false,
        "nadimak" => "Dzoni"
    ];  

    echo "Ja se zovem {$osobe['Nikola']['nadimak']}, a prezivam se {$osobe['Nikola']['prezime']}";

    $imena = array_keys($osobe);
    var_dump($imena);

    $prezimena = array_column($osobe, "prezime");
    var_dump($prezimena);

    ?>