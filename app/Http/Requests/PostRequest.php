<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|max:200',
            'body' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nama Tugas harus di isi.',
            'title.unique' => 'Nama Tugas ini sudah digunakan.',
            'body.required' => 'Deadline Tugas harus di isi.',
        ];
    }
}
