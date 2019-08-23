@extends('layouts.app')

@section('content')
	<h1>Todos los doctores</h1>
	<a class="btn btn-success" href="{{ route('doctores.create') }}">Crear doctor</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Dni</th>
			<th>CMP</th>
			<th>Especialidades</th>
			<th>Acción</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td><a href="{{ route('doctores.show', $user->id) }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->doctor->dni }}</td>
				<td>{{ $user->doctor->cmp }}</td>
				<td>
					@foreach($user->specialties as $specialty)
						[{{ $specialty->name }}]
					@endforeach
				</td>
				<td>
					<a class="btn btn-info btn-xs" href="{{ route('doctores.edit', $user->id) }}">Editar</a><br>
					<form method="POST" action="{{ route('doctores.destroy', $user->id) }}">
						@csrf @method('DELETE')
						<button class="btn btn-danger btn-xs">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection