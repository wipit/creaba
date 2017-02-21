@extends('layouts.app')
@section('content')
<div class="container" id="perfil">
    <div class="row">
        <div class="col-md-3 fondo gris">
	        {!! Form::model($usuario, ['url' => '/imagen', 'method' => 'patch', 'files' => true]) !!}
	            <figure id="pic" style="background-image: url('{{ $usuario->getImagen() }}');">
	            	<span class="dummy"></span>
	            	<span class="cambiar">cambiar imagen</span>
	            </figure>
	            <div class="hidden">{!! Form::file('imagen', ['id' => 'avatar']); !!}</div>
	        {!! Form::close() !!}
        </div>
        <div class="col-md-8 col-md-offset-1">
        	{!! Form::model($usuario, ['url' => '/perfil', 'method' => 'patch', 'files' => true]) !!}
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
				<h4>Mis intereses</h4>
				{!! Form::submit('Guardar', ['class' => 'btn btn-default']) !!}
			{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection