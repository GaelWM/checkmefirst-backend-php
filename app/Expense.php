<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['user_id', 'name', 'description', 'date_created', 'is_active'];

    public function user()
    {
        return $this->belongsTo('users', 'user_id', 'id');
    }
}
