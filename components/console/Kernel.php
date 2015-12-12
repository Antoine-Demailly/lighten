<?php

namespace components\console;

use components\ORM\OrmConfig;

class Kernel
{
  private $documentation = "Lighten Documentation:\n  En cours de rédaction\n";

  public function __construct($arguments, $db_infos)
  {
    array_shift($arguments);

    if (empty($arguments)) {
      exit($this->getDocumentation());
    }

    OrmConfig::init($db_infos);


    $commands = explode(':', array_shift($arguments));
    $object = 'components\console\\' . $commands[0] . '\\' . ucfirst($commands[1]);

    new $object($arguments);
  }

  private function getDocumentation()
  {
    return $this->documentation;
  }
}
