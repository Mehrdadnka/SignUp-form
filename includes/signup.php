<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include'../sys/head.php';
        ?>
    </head>
    <body>
        <?php
            include'nav.php';
        ?>
        <h1>SignUp</h1>
        <!--disable html atribute validation-->
        <form action="process-signup.php" method="POST" novalidate>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="password_confirmation">Repeat password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
            include'../sys/footer.php';
        ?>
    </body>
</html>
