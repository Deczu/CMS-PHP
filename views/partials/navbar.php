<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <?php if($_SESSION && $_SESSION['permission']==2){
            echo "<a class='p-2 text-muted' href='add/company'>Dodaj Firme</a>";
            echo "<a class='p-2 text-muted' href='add/worker'>Dodaj Handlowca</a>";
            echo "<a class='p-2 text-muted' href='list/user'>Edytuj Użytkownika</a>";
            echo "<a class='p-2 text-muted' href='basket'>Koszyk</a>";
        }elseif ($_SESSION){
            echo "<a class='p-2 text-muted' href='add/worker'>Dodaj Handlowca</a>";
            echo "<a class='p-2 text-muted' href='edit/user'>Edytuj Użytkownika</a>";
            echo "<a class='p-2 text-muted' href='basket'>Koszyk</a>";


        }

        ?>
    </nav>
</div>