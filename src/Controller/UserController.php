<?php

namespace Controller;

use Entity\User;

class UserController
{
    public function __construct()
    {
      $users = new User();

      // $usersList = $users->getBy('username', 'Antoine');
      // var_dump($usersList);

      // Need to fix fetch/fetchAll [0] problem
      $user = $users->getBy('username', 'Antoine')[0];
      $user->setUsername('Baptiste');
      $user->setPassword('fkdsjf');
      $user->setActive(true);
      $user->persist();

      $user = new User();
      $user->setUsername('Junior');
      $user->setPassword('azerty');
      $user->setActive(true);
      $user->persist();
    }


    private function passwordHash($password)
    {
      
    }
}
