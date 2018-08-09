<?php
echo "tutaj ma się robić update w bazie";
//UPDATE users SET username=?,first_name=?,last_name=?,email=?,id_firmy=?  where id = ?'
//username imie_usera nazwisko_usera email_usera id_firmy

if($_SESSION['permission']==2)
{
    $app['database']->editUser([$_POST['username'],$_POST['imie_usera'],$_POST['nazwisko_usera'],$_POST['email_usera'],$_POST['id_firmy'],$_GET['userid']]);

}else{
    $app['database']->editUser([$_POST['username'],$_POST['imie_usera'],$_POST['nazwisko_usera'],$_POST['email_usera'],$_SESSION['company'],$_SESSION['id']]);

}
//username imie_usera nazwisko_usera email_usera id_firmy