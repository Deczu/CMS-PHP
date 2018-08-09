<!Doctype html>
<?php
//die(var_dump($_SESSION['username']));
if($_SESSION) header("Location: http://example2.com/");
include 'partials/bootstrapHead.php';
?>

    <body>
    <br>
        <div class="container">
            <h2>Zaloguj się</h2>
            <form class="" action="../functions/logIn.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Nazwa użytkownika" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Hasło" required>
                </div>
                <div class="form-group">
                    <a href="/register">Nie masz konta ? Zarejestruj się !</a>

                </div>
                <div class="form-group">
                    <a href="/reset">Zapomniałeś hasła ?</a>

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Zaloguj">

                </div>


            </form>

        </div>


    </body>
