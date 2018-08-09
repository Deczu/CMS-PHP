<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 18.07.18
 * Time: 09:46
 */

    $app['database']->insert('users',[
        //username,password,first_name,last_name
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email'=> $_POST['email']
    ]);

    header('Location: /');

