@extends('layouts.app')
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
		<td>{{ $user->doctor->dni }}</td>
	</tr>
	<tr>
		<th>CMP:</th>
		<td>{{ $user->doctor->cmp }}</td>
	</tr>
	<tr>
		<th>Roles:</th>
		<td>
			{{-- @foreach($user->roles as $role)
			{{ $role->display_name }}
			@endforeach --}}
		</td>
	</tr>
</table>
@endsection