<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends BaseModel
{
    protected $fillable = ['user_id', 'name', 'description', 'date_created', 'is_active'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
