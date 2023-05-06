<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'email' =>'required|string|email|unique:users,email,' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    /**
     * Get a data error message in a request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Данные должны быть строчного типа',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Данные должны быть строчного типа',
            'email.email' => 'Введите корректный адрес электронной почты',
            'email.unique' => 'Пользователь с такой почтой существует',
        ];
    }
}
