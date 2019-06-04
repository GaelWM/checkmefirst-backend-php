<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends BaseModel
{
    protected $fillable = ['expense_id', 'category_id', 'name', 'quantity', 'currency', 'cost', 'notes'
        , 'date_created', 'is_active', 'is_active'];

    public function expense()
    {
        return $this->belongsTo(Expense::class, 'expense_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
