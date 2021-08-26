<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeoRequest;
use App\Models\SeoModel;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index() {
        $pages = SeoModel::all();
        return view('admin.seo.index', [
            'pages' => $pages,
        ]);
    }

    public function edit(int $id) {
        $page = SeoModel::find($id);
        return view('admin.seo.edit', [
            'page' => $page,
        ]);
    }

    public function update(SeoRequest $request, int $id) {
        $request->flash();
        $request->validated();
        $page = SeoModel::find($id);
        $page->fill($request->all());
        $page->update();
        return redirect()->back()->with('success', 'Запись успешно добавлена');
    }
}
