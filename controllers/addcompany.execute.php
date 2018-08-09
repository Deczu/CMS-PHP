<?php
echo "tutaj jest dodawanie nowej firmy";

$app['database']->insert('firmy',[
    //username,password,first_name,last_name
    'nazwa' => $_POST['nazwa_firmy'],
    'adres' => $_POST['adres_firmy'],
    'NIP' => $_POST['nip']
]);

header('Location: /');