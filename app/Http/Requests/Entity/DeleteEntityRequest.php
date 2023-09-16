<?php

namespace App\Http\Requests\Entity;

use App\Rules\CheckExistsEntityRule;
use Illuminate\Foundation\Http\FormRequest;

class DeleteEntityRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'entity_type' => 'required',
            'value' => ['required', new CheckExistsEntityRule]
        ];
    }
}
