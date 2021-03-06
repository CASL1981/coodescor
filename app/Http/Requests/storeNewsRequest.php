<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeNewsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'body' => 'required',
            'excerpt' => 'required',
            'category_news_id' => 'required',
        ];
    }
}
