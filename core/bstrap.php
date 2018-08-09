<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 13.07.18
 * Time: 15:14
 */

session_start();
//
$app=[];

$app['config']=require 'dbconfig/config.php';
require 'Router.php';
require 'Request.php';
require 'database/Connection.php';
require 'database/QuerryBuilder.php';

//require 'UserSession.php';
//$tasks=fetchAllTasks($pdo);
$app['database'] = new QuerryBuilder(Connection::make($app['config']['database']));



