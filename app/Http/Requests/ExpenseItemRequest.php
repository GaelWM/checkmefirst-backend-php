<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseItemRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        switch ($this->method())
        {
            case "POST":
                $rules = [
                    'expense_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                    'name' => 'required|unique:expense_items',
                    'quantity' => 'nullable|',
                    'cost' => 'required|',
                    'currency' => 'required|',
                    'notes' => 'nullable',
                    'date_created' => 'required',
                    'is_done' => 'sometimes',
                    'is_active' => 'sometimes',
                ];
                break;

            case "PATCH":
                $rules = [
                    'expense_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                    'name' => 'required|',
                    'quantity' => 'nullable|',
                    'cost' => 'required|',
                    'currency' => 'required|',
                    'notes' => 'nullable',
                    'date_created' => 'required',
                    'is_done' => 'sometimes',
                    'is_active' => 'sometimes',
                ];
                break;
        }

        return $rules;
    }
}
