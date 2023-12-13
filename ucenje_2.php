<?php

    $osobe = [
        //0
        [
            "ime" => "Tomislav",
            "prezime" => "Nikolic",
            "godiste" => 1993
        ],
        //1
        [
            "ime" => "Stefan",
            "prezime" => "Kljajic",
            "godiste" => 1996
        ],

    ];

    echo $osobe[0]["ime"];
    echo $osobe[1]["godiste"];

    $trenutna_godina = date("Y");
    $tomislav_godine = $trenutna_godina - $osobe[0]["godiste"];
    echo $tomislav_godine;
