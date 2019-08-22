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
	<button>Crear</button>
</form>

@endsection