<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' =>'required|string|email|unique:users',
            'role_id' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Данные должны быть строчного типа',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Данные должны быть строчного типа',
            'email.email' => 'Введите корректный адрес электронной почты',
            'email.unique' => 'Пользователь с такой почтой существует',
            'role_id.required' => 'Это поле необходимо для заполнения',
            'role_id.integer' => 'Данные должны быть целочисленного типа',
        ];
    }
}
