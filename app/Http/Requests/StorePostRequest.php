<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
* @bodyParam title string The title of the post.
* @bodyParam description string required The content of the post.
* @bodyParam website_id integer ID of the website the post belongs to.
* @bodyParam user_id integer ID of the author of the post.
*/
class StorePostRequest extends FormRequest
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
            'title' => 'string|required',
            'description' => 'string|required',
            'website_id' => 'integer|required',
            'user_id' => 'string|required'
        ];
    }
}
