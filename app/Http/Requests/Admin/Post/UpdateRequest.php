<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'is_main' => 'required',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны быть строчного типа',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны быть строчного типа',
            'preview_image.file' => 'Необходимо загрузить файл',
            'main_image.file' => 'Необходимо загрузить файл',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_main' => $this->boolean('is_main'),
        ]);
    }
}
