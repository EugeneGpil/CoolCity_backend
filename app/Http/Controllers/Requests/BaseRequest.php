<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function getData(string $action)
    {
        $data = parent::getFormData()[$action];

        return $data;
    }
}
