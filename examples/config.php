<?php

require_once("SplClassLoader.php");
$classLoader = new SplClassLoader('DALTCORE\Plesk', '../../src');
$classLoader->register();

$config = array(
    'host'=>'plesk12-webadmin.demo.parallels.com',
    'username'=>'admin',
    'password'=>'panel',
);
