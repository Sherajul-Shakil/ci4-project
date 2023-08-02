<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {	
		$db = \Config\Database::connect();
        if ($db->connect()) {
            echo 'Database connection is OK';
        } else {
            echo 'Database connection is failed';
        }
        return view('welcome_message');
    }
}
