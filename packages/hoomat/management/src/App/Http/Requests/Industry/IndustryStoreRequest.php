<?php

namespace Hoomat\Management\App\Http\Requests\Industry;

use Illuminate\Foundation\Http\FormRequest;

class IndustryStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'permissions' => ['required', 'array'],
            'permissions.*' => ['required', 'int', 'exists:permissions,id']
        ];
    }

    public function messages(): array
    {
        return [
            'name.*' => 'نام وارد شده معتبر نیست',
            'permissions.*' => 'مجوزهای انتخاب شده معتبر نیستند',
        ];
    }
}
