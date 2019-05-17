<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormValidator extends FormRequest
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
        return [
            //input field name as key
            'title' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter title!',
            'title.min' => 'title should be a minimum of four characters'
        ];
    }
}
