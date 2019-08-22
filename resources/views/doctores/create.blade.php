@extends('layouts.app')

@section('content')
<h1>Crear paciente</h1>


<form method="POST" action="{{ route('pacientes.store') }}">
	@csrf
	<label>
		Nombre <br>
		<input type="text" name="name" value="{{ old('name') }}">
	</label>
	<br>
	<label>
		Email <br>
		<input type="text" name="email" value="{{ old('email') }}">
	</label>
	<br>
	<label>
		Password <br>
		<input type="password" name="password" value="{{ old('password') }}">
	</label>
	<br>
	<label>
		Dni <br>
		<input type="text" name="dni" value="{{ old('dni') }}">
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
		<input type="date" name="birthdate" value="{{ old('birthdate') }}">
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
		<input type="text" name="insurance_company" value="{{ old('insurance_company') }}">
	</label>
	<br>
	<button>Crear</button>
</form>

@endsection