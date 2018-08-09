<?php
$id=$_GET['workerid'];

$worker=$app['database']->fetchWorker($id);
$worker=$worker[0];
require 'views/editworker.view.php';