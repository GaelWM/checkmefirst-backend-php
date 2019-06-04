<?php
/**
 * Created by PhpStorm.
 * User: gaelmusikingala
 * Date: 04/06/2019
 * Time: 22:57
 */

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


abstract class BaseFormRequest extends FormRequest
{
    /**
     * For more sanitizer rule check https://github.com/Waavi/Sanitizer
     */
    public function validateResolved()
    {
        parent::validateResolved();
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize();
}
