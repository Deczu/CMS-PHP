<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 23.07.18
 * Time: 12:06
 */

$app['database']->editWorker([$_POST['imie_handlowca'],$_POST['email_handlowca'],$_POST['telefon'],$_GET['workerid']]);
header('Location: /');