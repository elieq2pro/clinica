@extends('layouts.app')

@section('content')
	<h1>Todos los pacientes</h1>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Acción</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role->display_name }}</td>
				<td>
					<a class="btn btn-info btn-xs" href="{{ route('users.edit', $user->id) }}">Editar</a><br>
					<form method="POST" action="{{ route('users.destroy', $user->id) }}">
						@csrf @method('DELETE')
						<button class="btn btn-danger btn-xs">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection