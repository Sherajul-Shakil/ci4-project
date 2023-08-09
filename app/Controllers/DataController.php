<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Traits\DataTrait;

use App\Models\ProductModel;
use App\Models\FakeUserModel;

class DataController extends BaseController
{
    use DataTrait;

    public function __construct()
    {
        // Loading db instance
        $this->db = db_connect();
    }

    public function listProducts()
    {
        // Get data using Trait method
        $products = $this->getDataMethod(new ProductModel());

        echo "<pre>";
        print_r($products);
    }

    public function listUsers()
    {
        // Get data using Trait method
        $users = $this->getDataMethod(new FakeUserModel());

        echo "<pre>";
        print_r($users);
    }

    // sql stored procedure
    public function listUser()
    {
        $users = $this->db->query("CALL getUser()")->getResult();

        echo "<pre>";
        print_r($users);
    }

    public function singleUser($id = null)
    {
        if ($id === null) {
            echo "Please provide a user ID.";
            return;
        }

        $single_user = $this->db->query("CALL getSingleUser(" . $id . ")")->getRow();

        echo "<pre>";
        print_r($single_user);
    }
}