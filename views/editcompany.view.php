<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 09:40
 */

//die(var_dump($_SESSION['username']));
if(!isset($_SESSION) || $_SESSION['permission']!=2) header("Location: http://example2.com/");
include 'partials/bootstrapHead.php';
?>

    <body>
    <br>
        <div class="container">
            <h2>Edycja danych firmy: <?= $company->nazwa ?></h2>
            <form class="mb-0" action="/edit/company/execute?companyid=<?= $id ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nazwa_firmy" id="nazwa_firmy" class="form-control" placeholder="Nazwa firmy" value="<?= $company->nazwa ?>" required>
                </div>

                <div class="form-group">
                    <input type="text" name="adres_firmy" id="adres_firmy" class="form-control" placeholder="Adres" value="<?= $company->adres ?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP" value="<?= $company->NIP ?>" required maxlength="10" minlength="10">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edytuj!">

                </div>


            </form>

        </div>


    </body>
