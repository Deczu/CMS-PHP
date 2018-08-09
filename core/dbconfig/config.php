<?php
return [
//'mysql:host=127.0.0.1;dbname=mytodo','root','');
    'database' => [
        'connection'=>'mysql:host=127.0.0.1',
        'name' => 'cms_simple',
        'username' => 'root',
        'password' => 'admin',
        'options' => [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];