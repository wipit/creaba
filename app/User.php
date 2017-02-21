<?php
    namespace creaBuenosAires;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Http\Request;
    use Auth;

    class User extends Authenticatable {
        use Notifiable;

        protected $fillable = [
            'sexo', 'nombre', 'apellido', 'dni', 'nivel_estudios', 'titulo', 'email', 'imagen', 'password'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function estudios() {
            return $this->hasOne('creaBuenosAires\Estudio', 'id', 'nivel_estudios');
        }

        public function titulos() {
            return $this->hasOne('creaBuenosAires\Titulo', 'id', 'titulo');
        }

        public static function getTotal() {
            return User::with('estudios', 'titulos')->get();
        }

        public function getImagen() {
            return ($this->imagen) ? \Storage::url($this->imagen) : 'img/avatar.jpg';
        }

        public static function cambiarImagen(Request $request) {
            if ($request->hasFile('imagen') && $request->file('imagen')->isValid()) {
                \Storage::delete(User::find(\Auth::id())->imagen);
                $imagen = $request->file('imagen')->store('public/perfiles');
                User::find(Auth::id())->update(['imagen' => $imagen]);
            }
        }
    }