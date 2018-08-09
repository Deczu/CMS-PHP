<?php

if(!isset($_SESSION) || $_SESSION['permission']!=2) header("Location: http://example2.com/");
include 'partials/bootstrapHead.php';
?>


<body>
<br>
<div class="container">
    <h2>Dodaj Firme</h2>
    <form class="" action="/add/company/execute" method="post">
        <div class="form-group">
            <input type="text" name="nazwa_firmy" id="nazwa_firmy" class="form-control" placeholder="Nazwa firmy" required>
        </div>

        <div class="form-group">
            <input type="text" name="adres_firmy" id="adres_firmy" class="form-control" placeholder="Adres" required>
        </div>
        <div class="form-group">
            <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP" required maxlength="10" minlength="10">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edytuj!">

        </div>


    </form>

</div>


</body>

</html>