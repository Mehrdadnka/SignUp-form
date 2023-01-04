<?php
    /*
    =========================================================================================================
    Start of program
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
                $parag = file_get_contents('readme.txt','r') or die(‘ERROR: cannot find readme file’);
                echo $parag;
            ?>
        </p>
        <?php
            include'sys/footer.php';
        ?>
    </body>
</html>
