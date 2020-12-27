<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Applications\Requests;

use App\Http\Controllers\Requests\BaseRequest;

class CreateApplicationRequest extends BaseRequest
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
            'position_id' => 'required|integer|exists:positions,id',
            'name' => 'string|nullable|max:255',
            'phone' => 'string|nullable|max:255',
            'postcode' => 'string|nullable|max:255',
            'address' => 'string|nullable|max:65535',
            'email' => 'string|nullable|max:255',
            'facebook' => 'string|nullable|max:255',
            'line' => 'string|nullable|max:255',
            'whatsapp' => 'string|nullable|max:255',
            'telegram' => 'string|nullable|max:255',
            'vk' => 'string|nullable|max:255',
        ];
    }
}
