<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
        return 
        [
            'name'=>'required|max:200',
            'teacher'=>'required|max:200',
            'lun'=>'required|max:15',
            'mar'=>'required|max:15',
            'mie'=>'required|max:15',
            'jue'=>'required|max:15',
            'vie'=>'required|max:15',
        ];
    }
}
