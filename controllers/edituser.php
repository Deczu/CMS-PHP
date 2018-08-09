<?php
if($_SESSION['permission']>1)
{
    $id=$_GET['userid'];
    $user=$app['database']->fetchUser($id);
    $user=$user[0];
    $companies = $app['database']->fetchAllCompanies();
}
else{
    $id=$_SESSION['id'];
    $user=$app['database']->fetchUser($_SESSION['id']);
    $user=$user[0];
}


require 'views/edituser.view.php';