<?php
        $naslov = "Postani programer";

        $stavke = [

            [
                "prva" => "Glavna",
                "druga" => "O nama",
                "treca" => "Kontakt"
            ],
        ];


        $godina = date('Y');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Postani programer</title>
</head>
<body>
    <h1><?php echo $naslov ?></h1>
    <nav>
        <a href="https://forum.turtle-wow.org/viewtopic.php?t=3582"><?php echo $stavke[0]["prva"] ?></a>
        <a href="https://www.warmane.com/"><?php echo $stavke [0]["druga"]?></a>
        <a href="https://whitemane.org/"><?php echo $stavke [0]["treca"]?></a>
    </nav>
    <footer>
        <p>Copyright © mojsajt <?php echo $godina ?></p>
    </footer>
</body>
</html>