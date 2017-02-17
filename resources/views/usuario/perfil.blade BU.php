@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <figure style="border-radius: 50%; background-size: cover; background-position: center center; background-image: url({{ ($usuario->imagen) ? $usuario->imagen : 'img/avatar.jpg' }});">
            	<span class="dummy" style="display: block; padding-top: 100%;"></span>
            </figure>
        </div>
        <div class="col-md-8">
            <form method="post" action="">
            	{{ csrf_field() }}
            	{{ method_field('PATCH') }}
            	<div class="form-group">
            		<label class="radio-inline">
					  	<input type="radio" name="sexo" id="inlineRadio1" value="F" {{ old('sexo', $usuario->sexo) === 'F' ? 'checked' : '' }}> Mujer
					</label>
					<label class="radio-inline">
					  	<input type="radio" name="sexo" id="inlineRadio2" value="M" {{ old('sexo', $usuario->sexo) === 'M' ? 'checked' : '' }}> Hombre
					</label>
            	</div>
            	<div class="form-group">
				    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{ $usuario->nombre }}" />
				</div>
				<div class="form-group">
				    <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="{{ $usuario->apellido }}" />
				</div>
				<div class="form-group">
				    <input type="text" class="form-control" name="dni" placeholder="DNI" value="{{ $usuario->dni }}" />
				</div>
				<div class="form-group">
					<label for="nivel_estudios">Nivel de Estudios</label>
					<select class="form-control" name="nivel_estudios">
						@foreach ($estudios as $estudio)
							<option value="{{ $estudio->id }}" {{ old('nivel_estudios', $usuario->nivel_estudios) == $estudio->id ? 'selected' : '' }}>{{ $estudio->nivel }}</option>
						@endforeach
					</select>
				</div>	
				<div class="form-group">
					<label for="nivel_estudios">Título</label>
					<select class="form-control" name="titulo">
						@foreach ($titulos as $titulo)
							<option value="{{ $titulo->id }}" {{ old('titulo', $usuario->titulo) == $titulo->id ? 'selected' : '' }}>{{ $titulo->diploma }}</option>
						@endforeach
					</select>
				</div>	
				<h4>Mis redes sociales</h4>
				<h4>Mis intereses</h4>
				<button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection