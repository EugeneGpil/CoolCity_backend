<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Positions\Requests;

use App\Http\Controllers\Requests\BaseRequest;

class GetPositionsRequest extends BaseRequest
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
            'only_in_stoke' => 'string|in:true,false',
            'language' => 'string|in:th,en,ru',
        ];
    }
}
