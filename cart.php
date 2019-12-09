

        <form method="POST">
            <input type="number" min="1" name="nummer" max="3" id="nummer" placeholder="Voer een nummer in" required size="1" />
            <input type="submit" value="opslaan"/>
        </form>

        <?php
        session_start();
        if (isset($_POST["nummer"])) {
            setcookie("nummer", $_POST["nummer"]);
            
            echo $_REQUEST["nummer"];
        }
        ?>
        

    </body>
</html>
