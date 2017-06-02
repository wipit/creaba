<?php
    namespace creaBuenosAires\Http\Controllers;
    use Illuminate\Http\Request;
    use creaBuenosAires\Http\Requests\ImageFormRequest;
    use creaBuenosAires\Http\Requests\PerfilFormRequest;
    use creaBuenosAires\User;
    use Illuminate\Support\Facades\Storage;
    use Auth;

    class UserController extends Controller {
        public function __construct() {
            $this->middleware('auth', ['except' => 'index']);
        }

        public function index() {
            return view('usuario.lista')->with('lista', User::getTotal());
        }

        public function update(Request $request, PerfilFormRequest $validation) {
            if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
                Storage::delete(User::find(Auth::id())->imagen);
                $imagen = $request->file('imagen')->store('public/perfiles');
                User::find(Auth::id())->update(['imagen' => $imagen]);
            }
            $user = User::find(Auth::id())->update($request->except(['imagen']));
            User::find(Auth::id())->intereses()->sync($request->intereses);
            $request->session()->flash('mensaje', 'Perfil guardado exitosamente');
            return redirect()->route('Perfil');
        }

        public function perfil() {
            $usuario =  User::with('estudios', 'titulos', 'intereses')->findOrFail(Auth::id());
            return view('usuario.perfil', compact('usuario', 'estudios', 'titulos', 'intereses'));
        }
    }