<?php

require_once("../config.php");

$params = array(
    'id'=>0,
    //'username'=>'',
);

$request = new \DALTCORE\Plesk\DeleteClient($config, $params);
$info = $request->process();

var_dump($info);