<!doctype html>
<html lang="en">
<?php

require 'partials/blogHead.php'; ?>

<body>

<div class="container">
<?php include "partials/indexheader.php"; ?>
    <?php include "partials/navbar.php"; ?>


    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">

            <h1 class="display-4 font-italic">
                <?php
                if($_SESSION):
                    if($_SESSION['permission']==2):
                        echo "Admin";
                    else:
                        foreach ($workers as $worker)
                        {
                            if($worker->id_firmy==$_SESSION['company']){
                                echo $worker->nazwa;
                                break;
                            }
                            else{
                                echo "Poczekaj na autoryzacje";
                                break;
                            }
                        }

                        endif;
                else:
                    echo "Dostępne tylko dla zalogowanego";
                endif;
                ?>
            </h1>

        </div>
    </div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <?php if($_SESSION) : ?>
                <h3 class="pb-3 mb-4 font-italic">
                    Pracownicy
                </h3>
                <table class="table">
                    <tr>
                        <th>Imie</th>
                        <th>Adres Email</th>
                        <th>Nr. Telefonu</th>
                        <th>Firma</th>
                        <th>Edycja</th>
                        <th>Kontakty</th>
                    </tr>
                        <?php
                        foreach ($workers as $worker) : ?>
                            <?php if($_SESSION['permission']==2){
                                echo "<tr>";
                                echo "<th>$worker->imie</th>";
                                echo "<th>$worker->email</th>";
                                echo "<th>$worker->telefon</th>";
                                echo "<th>$worker->nazwa</th>";
                                echo "<th><a href='edit/worker?workerid={$worker->id}'>EDIT</a></th>";
                                echo "<th><a href='contacts?workerid={$worker->id}'>Kontakty</a> </th>";
                                echo "</tr>";
                                // $worker->id_firmy;
                            }elseif ($_SESSION['permission']==1 and $worker->id_firmy == $_SESSION['company']) {
                                echo "<tr>";
                                echo "<th>$worker->imie</th>";
                                echo "<th>$worker->email</th>";
                                echo "<th>$worker->telefon</th>";
                                echo "<th>$worker->nazwa</th>";
                                echo "<th><a href='edit/worker?workerid={$worker->id}'>EDIT</a></th>";
                                echo "<th><a href='contacts?workerid={$worker->id}'>Kontakty</a></th>";
                                echo "</tr>";
                            }
                            ?>
                        <?php endforeach; ?>
                </table>
                <br>
                <h3 class="pb-3 mb-4 font-italic">
                    Zarejestrowane Firmy
                </h3>
                <table class="table">
                    <tr>
                        <th>Nazwa Firmy</th>
                        <th>Adres Firmy</th>
                        <th>NIP</th>
                        <?php if($_SESSION['permission']==2) echo "<th>Edit</th>"; ?>
                    </tr>

                    <?php foreach ($companies as $company) : ?>
                    <tr>
                    <?php
                        if($company->id != 3){
                            echo"<th>$company->nazwa</th>";
                            echo"<th>$company->adres</th>";
                            echo"<th>$company->NIP</th>";
                            if($_SESSION['permission']==2) echo "<th><a href='edit/company?companyid={$company->id}'>Edit</a></th>";
                        }

                        ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</main><!-- /.container -->

<?php include ('partials/footer.php');?>
</body>
</html>

