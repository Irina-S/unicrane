<?php

namespace App\Http\Controllers;

use App\Models\SeoModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getSeoModel(string $name) {
        $model = SeoModel::query()->where('page_name', $name)->first();
        return $model;
    }
}
