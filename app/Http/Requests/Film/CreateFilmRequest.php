<?php

namespace App\Http\Requests\Film;

use App\Rules\UploadImageRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateFilmRequest extends FormRequest
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
            'value' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|string',
            'genre_id' => 'required',
            'country_id' => 'required',
            'director_id' => 'required',
            'actors' => 'required|array',
            'actors.*' => 'exists:actors,id',
            'image' => ['required', 'image', 'max:2048', new UploadImageRule]
        ];
    }
}
