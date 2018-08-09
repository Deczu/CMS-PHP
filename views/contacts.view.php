<?php

if(!isset($_SESSION)){
    header("Location: http://example2.com/");
}
elseif(empty($contacts)) {
    header("Location: http://example2.com/");
}elseif ($_SESSION['permission']<2 and  $_SESSION['company']!=$cnt->id_firmy)
    {
        echo "<img style='width: 100%; height: 100%' src='https://i.imgur.com/9LXLBaw.jpg'>";
        header( "refresh:5;url=/" );
        die();

    }

include ('partials/blogHead.php');

?>

<body>
<br>
<h1>Kontakty</h1>
<br>
<table class="table">
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Telefon</th>
        <th>Email</th>

    </tr>
    <?php foreach ($contacts as $contact) : ?>
        <?php
        echo "<tr>";
        echo "<th>$contact->imie</th>";
        echo "<th>$contact->nazwisko</th>";
        echo "<th>$contact->telefon</th>";
        echo "<th>$contact->email</th>";

        echo "</tr>";
        ?>
    <?php endforeach; ?>
</table>
&nbsp;
<button class='btn' onclick='hideForm()' >Edytuj</button>
<div id="form_disp" style="display:none;" class="container" >

    <form class="form" action="" method="post">
        <div class="form-group">
            <select name="id_firmy" class="form-control ">
                <?php
                foreach ($contacts as $contact)
                {
                    echo "<option value='$contact->id'>Imie i nazwisko: $contact->imie $contact->nazwisko  Email: $contact->email </option>";
                }

                ?>
            </select>
        </div>


        <div class="form-group">
            <p>Imie</p>
            <input type="text" name="imie_kontaktu" id="imie_kontaktu" class="form-control" placeholder="Imie"  required>
        </div>

        <div class="form-group">
            <p>Nazwisko</p>
            <input type="text" name="nazwisko_kontaktu" id="nazwisko_kontaktu" class="form-control" placeholder="Nazwisko" required>
        </div>

        <div class="form-group">
            <p>Telefon</p>
            <input type="text" name="telefon_kontaktu" id="telefon_kontaktu" class="form-control" placeholder="Telefon" required>
        </div>

        <div class="form-group">
            <p>Email</p>
            <input type="email" name="email_usera" id="email_usera" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edytuj!">

        </div>


    </form>

</div>
<script>
    function hideForm() {
        var x = document.getElementById("form_disp");

        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>



<?php include ('partials/footer.php');?>
</body>

