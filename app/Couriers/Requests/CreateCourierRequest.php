<?php

namespace App\Couriers\Requests;

use App\Base\BaseFormRequest;

class CreateCourierRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'unique:couriers']
        ];
    }
}