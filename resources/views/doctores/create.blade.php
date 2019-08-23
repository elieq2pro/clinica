@extends('layouts.app')

@section('content')
<h1>Crear doctor</h1>


<form method="POST" action="{{ route('doctores.store') }}">
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
		CMP <br>
		<input type="text" name="cmp" value="{{ old('cmp') }}">
	</label>
	<br>
	<button>Crear</button>
</form>

@endsection