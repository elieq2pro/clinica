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
		<input type="text" name="dni" value="{{ old('dni', $user->patient->dni) }}">
	</label>
	<br>
	<label>
		Genero <br>
		<select name="gender">
			<option value="masculino">Masculino</option>
			<option value="femenino">Femenino</option>
		</select>
	</label>
	<br>
	<label>
		Fecha de nacimiento <br>
		<input type="date" name="birthdate" value="{{ old('birthdate', $user->patient->birthdate) }}">
	</label>
	<br>
	<label>
		Estado civil <br>
		<select name="marital_status">
			<option value="soltero">Soltero</option>
			<option value="casado">Casado</option>
		</select>
	</label>
	<br>
	<label>
		Compañia de seguros <br>
		<input type="text" name="insurance_company" value="{{ old('insurance_company', $user->patient->insurance_company) }}">
	</label>
	<br>
	<button>Actualizar</button>
</form>

@endsection