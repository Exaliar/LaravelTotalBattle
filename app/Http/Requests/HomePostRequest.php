<?php

namespace App\Http\Requests;

use App\Models\HomePost;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class HomePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if (!Gate::allows('isAdmin')) {
        //     abort(403);
        // }
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
            'name' => 'required|max:20',
            'title' => 'required|max:255',
            'description' => 'required|max:2550',
        ];
    }
}
