<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'expense_id' => $this->expense_id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'currency' => $this->currency,
            'quantity' => $this->quantity,
            'cost' => $this->cost,
            'date_created' => $this->date_created,
            'is_done' => $this->is_done,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
            'expense' => new ExpenseResource($this->expense),
            'category' => new CategoryResource($this->category),
        ];
    }
}
