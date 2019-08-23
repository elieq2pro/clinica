@extends('layouts.app')

@section('content')
<h1>Crear especialidad</h1>

<form method="POST" action="{{ route('especialidades.store') }}">
	@csrf
	<label>
		Nombre <br>
		<input type="text" name="name" value="{{ old('name') }}">
	</label>
	<br>
	<button>Crear</button>
</form>

@endsection