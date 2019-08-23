@extends('layout')
@section('content')
<h1>{{ $user->name }}</h1>
<table class="table">
	<tr>
		<th>Nombre:</th>
		<td>{{ $user->name }}</td>
	</tr>
	<tr>
		<th>Email:</th>
		<td>{{ $user->email }}</td>
	</tr>
	<tr>
		<th>DNI:</th>
		<td>{{ $user->patient->dni }}</td>
	</tr>
	<tr>
		<th>Genero:</th>
		<td>{{ $user->patient->gender }}</td>
	</tr>
	<tr>
		<th>Fecha nacimiento:</th>
		<td>{{ $user->patient->birthdate }}</td>
	</tr>
	<tr>
		<th>Estado civil:</th>
		<td>{{ $user->patient->marital_state }}</td>
	</tr>
	<tr>
		<th>Compañia de seguros:</th>
		<td>{{ $user->patient->insurance_company }}</td>
	</tr>
</table>
@endsection