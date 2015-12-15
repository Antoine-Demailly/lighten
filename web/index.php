<pre>
<?php

require_once '../components/autoload/autoload.php';

use components\ORM\OrmConfig;
use src\Controller\UserController;
use components\tools\Yaml\Yaml;

if (!file_exists('../config/config.yml')) {
  echo "Please config database, execute commands: php lighten project:init";
  break;
}

$config = Yaml::parse(file_get_contents('../config/config.yml'));
$database = $config['database'];

OrmConfig::init($database);

$home = new UserController;
