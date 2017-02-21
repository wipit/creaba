<?php

namespace creaBuenosAires\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageFormRequest extends FormRequest
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
            'imagen' => 'image|mimes:jpg,jpeg,bmp,png,gif|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'imagen.image' => 'Por favor, suba una imagen',
            'imagen.mimes'  => 'La imagen debe tener el formato jpg, bmp, png o gif',
            'imagen.max'  => 'La imagen debe pesar menos de 2 megas',
        ];
    }
}
