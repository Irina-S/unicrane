<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoModel extends Model
{
    protected $table = 'seo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'keywords',
    ];
}
