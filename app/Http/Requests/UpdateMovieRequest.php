<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => 'sometimes|required|string',
            "imageUrl" => 'sometimes|required|string',
            'duration' => 'sometimes|required|integer',
            'releaseDate'=> 'sometimes|required|date_format:Y-m-d',
            'genre' => 'sometimes|required|string|in:' . implode(',',['sci-fi', 'documentary', 'action']),
            "director" => 'sometimes|required|string'
        ];
    }
}
