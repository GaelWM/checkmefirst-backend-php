<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends BaseFormRequest
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
                    'name' => 'required|unique:categories',
                    'description' => 'nullable',
                    'slug' => 'nullable',
                    'is_active' => 'sometimes',
                ];
                break;

            case "PATCH":
                $rules = [
                    'name' => 'required|unique:categories',
                    'description' => 'nullable',
                    'slug' => 'nullable',
                    'is_active' => 'sometimes',
                ];
                break;
        }

        return $rules;
    }
}
