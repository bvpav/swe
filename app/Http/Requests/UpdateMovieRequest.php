<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'director_id' => ['required', 'exists:directors,id'],
            'genre_id' => ['required', 'exists:genres,id'],
        ];
    }
} 