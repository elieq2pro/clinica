@extends('layouts.app')

@section('content')
<h1>Editar doctor</h1>

@if (session()->has('info'))
<div class="alert alert-success">
	{{ session('info') }}
</div>
@endif
<form method="POST" action="{{ route('doctores.update', $user) }}">
	@csrf @method('PATCH')
	<label>
		Nombre <br>
		<input type="text" name="name" value="{{ old('name', $user->name) }}">
	</label>
	<br>
	<label>
		Email <br>
		<input type="text" name="email" value="{{ old('email', $user->email) }}">
	</label>
	<br>
	<label>
		Dni <br>
		<input type="text" name="dni" value="{{ old('dni', $user->doctor->dni) }}">
	</label>
	<br>
	<label>
		CMP <br>
		<input type="text" name="cmp" value="{{ old('cmp', $user->doctor->cmp) }}">
	</label>
	<br>
	<button>Actualizar</button>
</form>

@endsection