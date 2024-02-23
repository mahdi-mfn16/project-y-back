<?php

namespace Hoomat\Management\App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class WebsiteIndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'limit' => ['sometimes', 'nullable', 'int', 'min:5'],
            'filters.user' => ['sometimes', 'nullable', 'int', 'exists:users,id'],
            'filters.search' => ['sometimes', 'nullable', 'string']
        ];
    }


    public function messages(): array
    {
        return [
            'limit.*' => 'وضعیت ارسالی نامعتبر است',
            'filters.user.*' => 'مقدار فیلتر کاربر نامعتبر است',
            'filters.search.*' => 'مقدار فیلتر جستجو نامعتبر است',
            
        ];
    }
}
