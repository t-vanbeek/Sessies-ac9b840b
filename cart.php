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
            <input type="number" min="1" name="nummer" max="3" id="nummer" placeholder="Voer een nummer in" required size="1" />
            <input type="submit" value="opslaan"/>
        </form>

        <?php
        if (isset($_POST["nummer"])) {
            $_SESSION["nummer"] = $_POST["nummer"];
            
            echo $_SESSION["nummer"];
        }
        ?>
        

    </body>
</html>