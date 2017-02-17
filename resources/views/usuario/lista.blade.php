@extends('layouts.app')

@section('content')
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Sexo</th>
					<th>DNI</th>
					<th>Nivel de estudios</th>
					<th>Título</th>
					<th>Imagen</th>
				</tr>
			</thead>
			<tbody>
				@foreach($lista as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->nombre }}</td>
						<td>{{ $usuario->apellido }}</td>
						<td>{{ $usuario->email }}</td>
						<td>{{ $usuario->sexo }}</td>
						<td>{{ $usuario->dni }}</td>
						<td>{{ $usuario->estudios->nivel or "-"  }}</td>
						<td>{{ $usuario->titulos->diploma or "-" }}</td>
						<td>{{ $usuario->imagen }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection