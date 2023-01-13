<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name_project' => 'required|unique:projects|max:150|min:3',
            'description' => 'nullable',
            // 'dev_lang' => 'required',
            'framework' => 'nullable',
            'team' => 'nullable',
            'link_git'=> 'nullable',
            'lvl_diff' => 'nullable',
            'cover_image' => 'nullable|image|max: 250',
            'type_id'=>'required|exists:types,id'
                ];
    }
    public function messages(){
        return [
            'name_project.required' => 'Il titolo è obbligatorio.',
            'name_project.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'name_project.max' => 'Il titolo non può superare i :max caratteri.',
            'name_project.unique:projects' => 'Il titolo esiste già',
            // 'dev_lang.required'=> 'Il parametro è obbligatorio',
            'type_id.required'=>'il parametro è obbligatorio'
        ];
    }
}
