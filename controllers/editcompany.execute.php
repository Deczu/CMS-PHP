<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 11:03
 */


$app['database']->editCompany([$_POST['nazwa_firmy'],$_POST['adres_firmy'],$_POST['nip'],$_GET['companyid']]);
echo "tu jest wysłanie danych do edycji do bazy";
header('Location: /');