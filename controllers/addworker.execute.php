<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 13:37
 */

$app['database']->insert('handlowcy',[
    //username,password,first_name,last_name
    'imie' => $_POST['imie_pracownika'],
    'id_firmy' => $_POST['id_firmy'],
    'email' => $_POST['email_pracownika'],
    'telefon' => $_POST['telefon_pracownika']

]);


header('Location: /');