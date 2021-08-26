<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CmsController extends Controller
{
    public function makeInclude() {
        for ($i = 1; $i <= 20; $i++) {
            $path = '../resources/views/content/service/' . 'service_editor' . $i . '.blade.php';
            File::put($path, '');
        }
        dd('end');
    }
}
