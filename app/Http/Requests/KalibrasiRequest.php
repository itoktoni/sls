<?php

namespace App\Http\Requests;

use App\Dao\Models\Kalibrasi;
use App\Dao\Traits\ValidationTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class KalibrasiRequest extends FormRequest
{
    use ValidationTrait;

    public function validation() : array
    {
        return [
            Kalibrasi::field_id_inventaris() => 'required',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
        ]);
    }

}
