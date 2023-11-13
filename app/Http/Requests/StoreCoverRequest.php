<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoverRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'          => ['required', 'unique:covers'],
            'standard_price' => 'required',
            'premium_price'  => 'required',
        ];
    }
}
