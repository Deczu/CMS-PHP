<?php
if(!isset($_SESSION) || $_SESSION['permission']<2){
    header("Location: http://example2.com/");
}

?>
<html>
<?php include ('partials/blogHead.php');?>
<body>
<h1>Admin Panel</h1>
<br>
<table class="table">
    <tr>
        <th>Nazwa Użytkownika</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Firma</th>
        <th>Edycja</th>
    </tr>

    <?php foreach ($users as $user) : ?>
        <?php
            echo "<tr>";
                echo "<th>$user->username</th>";
                echo "<th>$user->first_name</th>";
                echo "<th>$user->last_name</th>";
                echo "<th>$user->nazwa</th>";
                echo "<th><a href='/edit/user?userid={$user->id}'>Edytuj</a></th>";
            echo "</tr>";


        ?>
    <?php endforeach; ?>
</table>

<?php include ('partials/footer.php');?>
</body>

</html>