<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends BaseFormRequest
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
                    'user_id' => 'required|numeric',
                    'name' => 'required|unique:expenses',
                    'description' => 'nullable',
                    'date_created' => 'required',
                    'is_active' => 'sometimes',
                ];
                break;

            case "PATCH":
                $rules = [
                    'user_id' => 'required|numeric',
                    'name' => 'required',
                    'description' => 'nullable',
                    'date_created' => 'required',
                    'is_active' => 'sometimes',
                ];
                break;
        }

        return $rules;
    }
}
