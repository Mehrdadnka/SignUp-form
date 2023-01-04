<?php
    /*
    =========================================================================================================
    Start of Sign up form
    =========================================================================================================
    */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include'sys/head.php';
        ?>
    </head>
    <body>
        <?php
            include'sys/nav.php';
        ?>
        <h1>HELLO...</h1>
        <p>
            <?php
                $parag = file_get_contents('readme.txt','r');
                echo $parag;
            ?>
        </p>
        <footer>
        <small>&copy; <?php echo date("Y"); ?>By Mehrdadnka</small>
        </footer>
    </body>
</html>