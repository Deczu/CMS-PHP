<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 12:30
 */

//echo "tutaj jest dodawanie pracownika do firmy";
//var_dump($_SESSION);
//var_dump($companies);
include 'partials/blogHead.php';
?>



<body>


<div class="container">
    <h2>Dodaj Handlowca</h2>
    <form class="" action="/add/worker/execute" method="post">
        <div class="form-group">
            <input type="text" name="imie_pracownika" id="imie_pracownika" class="form-control" placeholder="Imie i Nazwisko" required>
        </div>

        <div class="form-group">
            <input type="email" name="email_pracownika" id="email_pracownika" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" name="telefon_pracownika" id="telefon_pracownika" class="form-control" placeholder="Telefon" required>
        </div>
        <div class="form-group">
            <select name="id_firmy" class="form-control ">
                <?php

                foreach ($companies as $company)
                {
                    echo "<option value='$company->id'>$company->nazwa</option>";
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Dodaj!">

        </div>


    </form>

</div>

</body>