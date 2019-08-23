@extends('layouts.app')

@section('content')
	<h1>Todos los doctores</h1>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Dni</th>
			<th>CMP</th>
			<th>Especialidades</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->doctor->dni }}</td>
				<td>{{ $user->doctor->cmp }}</td>
				<td>
					@foreach($user->specialties as $specialty)
						[{{ $specialty->name }}]
					@endforeach
				</td>
			</tr>
		@endforeach
	</table>
@endsection