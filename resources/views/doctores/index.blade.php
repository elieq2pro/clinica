@extends('layouts.app')

@section('content')
	<h1>Todos los pacientes</h1>
	<a class="btn btn-success" href="{{ route('pacientes.create') }}">Crear paciente</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Dni</th>
			<th>Genero</th>
			<th>Fecha de nacimiento</th>
			<th>Estado civil</th>
			<th>Compañia de seguros</th>
			<th>Acción</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->patient->dni }}</td>
				<td>{{ $user->patient->gender }}</td>
				<td>{{ $user->patient->birthdate }}</td>
				<td>{{ $user->patient->marital_status }}</td>
				<td>{{ $user->patient->insurance_company }}</td>
				<td>
					<a class="btn btn-info btn-xs" href="{{ route('pacientes.edit', $user->id) }}">Editar</a><br>
					<form method="POST" action="{{ route('pacientes.destroy', $user->id) }}">
						@csrf @method('DELETE')
						<button class="btn btn-danger btn-xs">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection