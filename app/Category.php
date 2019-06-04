<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    //
    protected $fillable = ['name', 'description', 'slug', 'is_active'];
}
