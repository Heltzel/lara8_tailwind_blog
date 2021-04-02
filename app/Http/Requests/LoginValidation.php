<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidation extends FormRequest
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
            'name' => 'required|max:20',
            'username' => 'required|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|max:20|confirmed',
            'password_confirmation' => 'required|max:20|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Uw Naam is verplicht',
            'name.max' => 'Uw Naam mag niet langer zijn dan 20 charters',
            'username.required' => 'Uw Gebruikersnaam is verplicht',
            'username.max' =>
                'Uw Gebruikersnaam mag niet langer zijn dan 20 charters',
            'email.required' => 'Uw Email is verplicht',
            'email.max' => 'Uw Email mag niet langer zijn dan 20 charters',
            'email.email' => 'Uw Email dient een email te zijn',
            'password.required' => 'Uw password is verplicht',
            'password.max' =>
                'Uw password mag niet langer zijn dan 20 charters',
            'password.confirmed' => 'Uw Password komt niet overeen',
        ];
    }
}
