<?php

namespace App\Traits;

trait DataTrait
{
    public function getDataMethod($model)
    {
        // Fetch all the data according to model
        return $model->findAll();
    }
}