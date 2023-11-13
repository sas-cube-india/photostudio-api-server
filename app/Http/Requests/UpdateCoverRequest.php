<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCoverRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'          => 'required|string',
            'standard_price' => 'required',
            'premium_price'  => 'required',
        ];
    }
}
