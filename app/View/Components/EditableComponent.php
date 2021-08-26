<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class EditableComponent extends Component
{
    public $tag;
    public $id;
    public $class;
    public $editable;
    public $dir;

    public function __construct($tag, $class, $id, $dir='index')
    {
        $this->tag   = $tag;
        $this->class = $class;
        $this->id    = $id;
        $this->editable = '';
        $this->dir = $dir;
    }

    public function render()
    {
        if(isset(Auth::user()->is_admin)){
            $this->editable = 'id="' . $this->dir . '_editor' . $this->id . '" data-dir="' . $this->dir . '" contenteditable="true"';
            $this->class = $this->class . ' ckeditor';
        }
        return view('components.editable-component');
    }
}
