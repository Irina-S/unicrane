<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', [
            'seo' => $this->getSeoModel('index'),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'seo' => $this->getSeoModel('about'),
        ]);
    }

    public function contacts()
    {
        return view('pages.contacts', [
            'seo' => $this->getSeoModel('contacts'),
        ]);
    }

    public function service()
    {
        return view('pages.service', [
            'seo' => $this->getSeoModel('service'),
        ]);
    }

    public function equipment()
    {
        return view('pages.equipment', [
            'seo' => $this->getSeoModel('equipment'),
        ]);
    }

    public function calculate()
    {
        return view('pages.calculate', [
            'seo' => $this->getSeoModel('calculate'),
        ]);
    }
}
