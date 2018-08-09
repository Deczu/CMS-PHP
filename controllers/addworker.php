<?php
$companies = $app['database']->fetchAllCompanies();
require ('views/addworker.view.php');