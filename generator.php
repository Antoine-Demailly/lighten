<?php

require_once 'autoload.php';

$db_infos = json_decode(file_get_contents('config/db.json'), true);
Orm_Config::init($db_infos);
$db = Orm_Config::getConnexion();

var_dump($argv);
