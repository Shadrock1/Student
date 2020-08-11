<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class MarkStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'mark' => 'between: 0,5',
            'subject_id' => 'required'
        ];
    }
}
