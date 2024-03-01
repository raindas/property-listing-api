<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class StoreBrokerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [$this->isPostRequest(), 'string', 'unique:brokers', 'max:255'],
            'address' => [$this->isPostRequest(), 'string', 'max:255'],
            'city' => [$this->isPostRequest(), 'string'],
            'zip_code' => [$this->isPostRequest()],
            'phone_number' => [$this->isPostRequest(), 'string', 'max:11'],
            'logo_path' => [$this->isPostRequest(), 'string']
        ];
    }

    private function isPostRequest() {
        return request()->isMethod('post') ? 'required' : 'sometimes';
    }
}