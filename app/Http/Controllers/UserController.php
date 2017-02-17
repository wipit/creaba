<?php
    namespace creaBuenosAires\Http\Controllers;
    use Illuminate\Http\Request;
    use Auth;
    use creaBuenosAires\User;

    class UserController extends Controller {
        public function index() {
            return view('usuario.lista')->with('lista', User::getTotal());
        }

        public function create() {
            //
        }

        public function store(Request $request) {
            //
        }

        public function show($id) {
            
        }

        public function edit($id) {
            
        }

        public function updateImagen(Request $request) {
            $user = User::find(Auth::id());
            $this->validate($request, ['imagen' => 'image|mimes:jpg,jpeg,bmp,png,gif|max:10000' ]);
            if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
                $imagen = $request->file('imagen')->store('public/perfiles');
                $user->update(['imagen' => $imagen]);
            }
            return redirect()->route('Perfil');
        }

        public function update(Request $request) {
            $this->validate($request, [ 
                'nombre' => 'required',
                'apellido' => 'required',
                'dni' => 'required',
                // 'imagen' => 'image|mimes:jpg,jpeg,bmp,png,gif|max:10000' 
            ]);
            $user = User::find(Auth::id());
            $user->update($request->all());
            // if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
            //     $imagen = $request->file('imagen')->store('public/perfiles');
            //     $user->update(['imagen' => $imagen]);
            // }
            $request->session()->flash('mensaje', 'Perfil guardado exitosamente');
            return redirect()->route('Perfil');
        }

        public function destroy($id) {
            //
        }

        public function perfil() {
            $usuario =  User::with('estudios', 'titulos')->findOrFail(Auth::id());
            $estudios = \creaBuenosAires\Estudio::all()->pluck("nivel", "id");
            $titulos = \creaBuenosAires\Titulo::all()->pluck("diploma", "id");
            return view('usuario.perfil', compact('usuario', 'estudios', 'titulos'));
        }
    }