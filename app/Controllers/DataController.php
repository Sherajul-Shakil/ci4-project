<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Traits\DataTrait;

use App\Models\ProductModel;
use App\Models\FakeUserModel;

class DataController extends BaseController
{
    use DataTrait;

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
}