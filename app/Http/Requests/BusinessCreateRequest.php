<?php

namespace App\Http\Requests;

use App\Business;
use Illuminate\Foundation\Http\FormRequest;

class BusinessCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create', Business::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:businesses,slug',
            'body' => 'required',
            'contacts' => 'required',
            'emails' => 'required'
        ];
    }
}
