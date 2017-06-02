@extends('layouts.app')
@section('content')
<div class="container" id="perfil">
    <div class="row">
    	{!! Form::model($usuario, ['url' => '/perfil', 'method' => 'patch', 'files' => true]) !!}
    		<div class="col-md-3 fondo gris">
    			<div id="foto_perfil"><avatar imagen="{{ $usuario->getImagen() }}"></avatar></div>
    		</div>
    		<div class="col-md-8 col-md-offset-1">
            	<div class="form-group">
            		<label class="radio-inline">{!! Form::radio('sexo', 'F'); !!} Mujer</label>
					<label class="radio-inline">{!! Form::radio('sexo', 'M'); !!} Hombre</label>
            	</div>
            	<div class="form-group">
            		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
				</div>
				<div class="form-group">
				    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
				</div>
				<div class="form-group">
				    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'DNI']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('nivel_estudios', 'Nivel de Estudios') !!}
					{!! Form::select('nivel_estudios', $estudios, null, ['class'=>'form-control']); !!}
				</div>	
				<div class="form-group">
					{!! Form::label('titulo', 'Título') !!}
					{!! Form::select('titulo', $titulos, null, ['class'=>'form-control']); !!}
				</div>	
				<h4>Mis redes sociales</h4>
				<div id="redes">
					<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
					<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
				</div>
				<h4>Mis intereses</h4>
				<div id="intereses">
					@foreach ($intereses as $id=>$interes)
						<label class="interes {{ $usuario->intereses->contains('id', $id) ? 'selected' : '' }}">
							{{ $interes }}
							<input type="checkbox" name="intereses[]" value="{{$id}}" {{ $usuario->intereses->contains('id', $id) ? 'checked' : '' }}>
						</label>
					@endforeach
				</div>
				{!! Form::submit('Guardar', ['class' => 'btn btn-default']) !!}
			</div>
		{!! Form::close() !!}
    </div>
</div>
@endsection