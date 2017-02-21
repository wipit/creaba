<?php
    namespace creaBuenosAires\Http\Controllers;
    use Illuminate\Http\Request;
    use creaBuenosAires\Http\Requests\ImageFormRequest;
    use creaBuenosAires\Http\Requests\PerfilFormRequest;
    use creaBuenosAires\User;
    use Auth;

    class UserController extends Controller {
        public function __construct() {
            $this->middleware('auth', ['except' => 'index']);
        }

        public function index() {
            return view('usuario.lista')->with('lista', User::getTotal());
        }

        public function updateImagen(Request $request, ImageFormRequest $validation) {
            User::cambiarImagen($request);
            return redirect()->route('Perfil');
        }

        public function update(Request $request, PerfilFormRequest $validation) {
            $user = User::find(Auth::id())->update($request->all());
            $request->session()->flash('mensaje', 'Perfil guardado exitosamente');
            return redirect()->route('Perfil');
        }

        public function perfil() {
            $usuario =  User::with('estudios', 'titulos')->findOrFail(Auth::id());
            return view('usuario.perfil', compact('usuario', 'estudios', 'titulos'));
        }
    }