<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HandsetFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand'=>'sometimes|string',
            'price_min'=>'sometimes|numeric',
            'price_max'=>'sometimes|numeric',
            'features'=>'sometimes|array',
            'features'=>'sometimes|string',
        ];
    }
}
