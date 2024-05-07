<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCelularRequest extends FormRequest
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
            //
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'price' => 'sometimes|numeric|min:0',
            'stock' => 'sometimes|integer|min:0',
            'image' => 'sometimes|nullable|max:2048',
            'weight' => 'sometimes|numeric|min:0',
            'is_waterproof' => 'sometimes|boolean',
            'release_date' => 'sometimes|date',
            'specifications' => 'sometimes|nullable',
            'category_id' => 'sometimes|exists:categories,id',
        ];
    }
}
