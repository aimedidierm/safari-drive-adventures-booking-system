<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            "tour_id" => "required|string|exists:tours,id",
            "seat" => "required|integer",
            "phone" => ["required", "string", "regex:/^(?:\+254|254|0)?(7\d{8})$/"],
        ];
    }
}
