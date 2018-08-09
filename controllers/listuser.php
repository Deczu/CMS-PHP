<?php
$users=$app['database']->fetchAllUsers();
require 'views/listuser.view.php';