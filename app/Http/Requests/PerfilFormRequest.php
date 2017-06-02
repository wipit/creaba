<?php
    namespace creaBuenosAires\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class PerfilFormRequest extends FormRequest {
        public function authorize() {
            return true;
        }

        public function rules() {
            return [
                'imagen' => 'image|mimes:jpg,jpeg,png|max:2000',
                'nombre' => 'required',
                'apellido' => 'required',
                'dni' => 'required'
            ];
        }

        public function messages() {
            return [
                'imagen.uploaded' => 'La imagen debe ser jpg o png y pesar menos de 2 megas',
                'imagen.image' => 'Por favor, suba una imagen',
                'imagen.mimes'  => 'La imagen debe tener el formato jpg, bmp, png o gif',
                'imagen.max'  => 'La imagen debe pesar menos de 2 megas',
            ];
        }
    }