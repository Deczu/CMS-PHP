<?php

if(!isset($_SESSION)){
    header("Location: http://example2.com/");
}
if ($_SESSION['permission']<2 and $_SESSION['company']!=$worker->id_firmy)
{
    echo "<img style='width: 100%; height: 100%' src='https://i.imgur.com/9LXLBaw.jpg'>";
    header( "refresh:5;url=/" );
    die();

}
include 'partials/bootstrapHead.php';
?>

    <body>
    <br>
        <div class="container">
            <h2>Edycja danych pracownika: <?= $worker->imie ?></h2>
            <form class="" action="/edit/worker/execute?workerid=<?= $id ?>" method="post">
                <div class="form-group">
                    <input type="text" name="imie_handlowca" id="imie_handlowca" class="form-control" placeholder="Imie" value="<?= $worker->imie ?>" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email_handlowca" id="email_handlowca" class="form-control" placeholder="Email" value="<?= $worker->email?>" required>
                </div>
                <div class="form-group">
                    <input type="text" name="telefon" id="telefon" class="form-control" placeholder="Telefon" value="<?= $worker->telefon ?>" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Edytuj!">

                </div>


            </form>

        </div>


    </body>
