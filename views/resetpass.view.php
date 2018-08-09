<!Doctype html>
<?php
//die(var_dump($_SESSION['username']));
if($_SESSION) header("Location: http://example2.com/");
include 'partials/bootstrapHead.php';
?>

<body>
<br>
<div class="container">
    <h2>Zresetuj hasło</h2>
    <form class="" action="/reset/us" method="post">
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Twój email">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Zaloguj">

        </div>


    </form>

</div>


</body>
