@extends('layouts.app')

@section('content')
<h1>Editar paciente</h1>

@if (session()->has('info'))
<div class="alert alert-success">
	{{ session('info') }}
</div>
@endif
<form method="POST" action="{{ route('pacientes.update', $user) }}">
	@csrf @method('PATCH')
	@csrf
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
	<button>Actualizar</button>
</form>

@endsection