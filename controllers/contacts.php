<?php
$id=$_GET['workerid'];
$contacts= $app['database']->fetechContacts($id);

if(!empty($contacts)) $cnt=$contacts[0];
require 'views/contacts.view.php';