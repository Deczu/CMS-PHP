
<?php

//get
$router->get('','controllers/index.php');
$router->get('login', 'controllers/logIn.php');
$router->get('register', 'controllers/register.php');
$router->get('reset','controllers/pwreset.php');
$router->get('email','controllers/sendemail.php');
$router->get('reset/user','views/resetpassuser.view.php');

//get editing user worker company
$router->get('edit/company','controllers/editcompany.php');
$router->get('edit/worker','controllers/editworker.php');
//get edit usr
$router->get('list/user','controllers/listuser.php');
$router->get('edit/user','controllers/edituser.php');


//get add worker company
$router->get('add/company','controllers/addcompany.php');
$router->get('add/worker','controllers/addworker.php');

//get contacts
$router->get('contacts','controllers/contacts.php');

//get basket


$router->get('basket','controllers/basket.php');



//posts methods
$router->post('register/user','controllers/register-user.php');
$router->post('reset/us','controllers/pwreset-email.php');
$router->post('reset/usr','controllers/pwreset-reset.php');

//post edit usr wodker company

$router->post('edit/company/execute','controllers/editcompany.execute.php');
$router->post('edit/worker/execute','controllers/editworker.execute.php');

//post add worker company
$router->post('add/company/execute','controllers/addcompany.execute.php');
$router->post('add/worker/execute','controllers/addworker.execute.php');

//post edit usr
$router->post('edit/user/execute','controllers/edituser.execute.php');







//only for testing
$router->get('test','controllers/test.php');