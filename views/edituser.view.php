<!doctype html>
<html lang="en">
<?php require 'partials/blogHead.php'; ?>
<body>

<div class="container">
    <?php echo "<h2>Edytujesz użytkownika : $user->first_name   $user->last_name</h2>"; ?>
    <form class="" action="/edit/user/execute?userid=<?= $id ?>" method="post">
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Nazwa użytkownika" value="<?= $user->username; ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="imie_usera" id="imie_usera" class="form-control" placeholder="Imie" value="<?= $user->first_name; ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="nazwisko_usera" id="nazwisko_usera" class="form-control" placeholder="Nazwisko" value="<?= $user->last_name ?>" required>
        </div>

        <div class="form-group">
            <input type="email" name="email_usera" id="email_usera" class="form-control" placeholder="Email" value="<?=$user->email ?>" required>
        </div>
        <?php if ($_SESSION['permission']==2) : ?>
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
        <?php endif; ?>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edytuj!">

        </div>


    </form>

</div>

</body>