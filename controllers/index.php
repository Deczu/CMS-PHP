<?php
$workers = $app['database']->fetchAllWorkers();
$companies = $app['database']->fetchAllCompanies();
require 'views/index.view.php';