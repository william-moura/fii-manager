<?php

namespace App\Domain\Fii\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FiiStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fii_code' => 'required|string|max:255',
            'fii_price' => 'required|decimal:2'
        ];
    }

    public function attributes(): array
    {
        return [
            'fii_code' => 'Code to FII',
            'fii_price' => 'FII Price',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ], 403));
    }
}
