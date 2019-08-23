@extends('layouts.app')

@section('content')
	<h1>Todos las especialidades</h1>
	<a class="btn btn-success" href="{{ route('especialidades.create') }}">Crear especialidad</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
		@foreach ($specialties as $specialty)
			<tr>
				<td>{{ $specialty->id }}</td>
				<td><a href="{{ route('especialidades.show', $specialty->id) }}">{{ $specialty->name }}</a></td>
				<td>
					<a class="btn btn-info btn-xs" href="{{ route('especialidades.edit', $specialty->id) }}">Editar</a><br>
					<form method="POST" action="{{ route('especialidades.destroy', $specialty->id) }}">
						@csrf @method('DELETE')
						<button class="btn btn-danger btn-xs">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection