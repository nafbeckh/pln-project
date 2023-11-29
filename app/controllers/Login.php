<?php

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller
{

     public object $model;

     public function __construct()
     {

          $this->model = new \App\Models\Login();
     }

     public function index()
     {
          $this->guest('login/index');
     }

     public function proses()
     {
          $login = $this->model->proses();

          if ($login['status'] == true) {
               $_SESSION['login'] = true;
               $_SESSION['user'] = $login['user'];
               header('location:' . URL . '/dashboard');
          } else {
               $_SESSION['login'] = false;
               header('location:' . URL);
          }
     }
}
