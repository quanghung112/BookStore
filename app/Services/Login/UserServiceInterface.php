<?php


namespace App\Services\Login;


interface UserServiceInterface
{
   public function login($user);

   public function logout();
}
