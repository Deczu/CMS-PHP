<?php
if($_SESSION) header("Location: http://example2.com/");
include 'partials/bootstrapHead.php';
?>

    <body>
    <br>
        <div class="container">
            <h2>Zarejestruj się</h2>
            <form class="" action="/register/user" method="post">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Twój Email">
                </div>
                <div class="form-group">
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Imie">
                </div>

                <div class="form-group">
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Nazwisko">
                </div>

                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Nazwa użytkownika">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Hasło">
                </div>

                <div class="form-group">
                    <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Potwierdź hasło">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Zaloguj">

                </div>



            </form>

        </div>

    <br>
    <footer class="form-group">
        <p align="center"><a href="/">Return</a></p>
    </footer>


    </body>

