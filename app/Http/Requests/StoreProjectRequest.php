<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // True
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:150', 'unique:projects'],
        ];
    }

    //     public function messages()
    //     {
    //         return [
    //             'voce.required' => 'questo e richiesto',
    //             'voce.max' => 'mass....',
    //         ];
    //     }
}
