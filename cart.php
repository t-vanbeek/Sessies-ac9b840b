<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <title>cart.php</title>

        <link href="bit_logo.png" rel="icon" type="image/png" />

    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form method="POST">
            <input type="number" min="1" max="3" name="nummer" id="nummer" placeholder="Voer een nummer in" required size="1" />
            <input type="submit" name="opslaan" id="opslaan" value="opslaan"/>
        </form>

        <?php

if(isset($_POST["opslaan"])){
    if(isset($_POST["nummer"]) < 1 || isset($_POST["nummer"]) > 3){
    echo("Kies een getal tussen de 1 en de 3!");
        } else { setcookie("nummertje", $_POST["nummer"]); }
        header("refresh: 0 ");
    }
    if (isset($_COOKIE["nummertje"])){
        echo("Je hebt") . " " . "#" .$_COOKIE["nummertje"]. " " . "gekozen";
    }
        ?>
        

    </body>
</html>