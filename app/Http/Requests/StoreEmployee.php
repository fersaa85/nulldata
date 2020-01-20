<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
            'address' => 'required',
            'checked' => 'required',
            'job' => 'required'
        ];
    }

    public function response(array $errors)
    {
        // Always return JSON.
        return response()->json($errors, 422);
    }
}
