<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{

	public function index()
	{
		if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
			header('location: ' . URL . '/dashboard');
		} else {
			$this->login('login/index');
		}
	}
}
