<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 20.07.18
 * Time: 08:55
 */
//echo "tutaj odpala się reset hasła";
$app['database']->reset([password_hash($_POST['password'],PASSWORD_DEFAULT),$_GET['token']]);

header('Location: /');