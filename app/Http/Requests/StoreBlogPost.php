<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth() ? true : false; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=> 'min:2|required|max:255', 
            'body'=> 'min:20|required',
        ];
    }
}
