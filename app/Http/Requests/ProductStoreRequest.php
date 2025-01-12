<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'slug' => 'nullable|string|unique:products,slug|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:5000',
            'price' => 'nullable|numeric|min:0',
            'sku' => 'nullable|string|unique:products,sku|max:100',
            'total_page' => 'nullable|integer|min:1',
            'publish_years' => 'nullable|integer|min:1900|max:' . date('Y'),
            'language' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
           'status' => 'required|boolean',
        ];
    }
}
