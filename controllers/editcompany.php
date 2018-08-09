<?php
$id=$_GET['companyid'];
$company=$app['database']->fetchCompany($id);
$company=$company[0];
require 'views/editcompany.view.php';