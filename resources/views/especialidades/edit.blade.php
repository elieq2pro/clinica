@extends('layouts.app')

@section('content')
<h1>Editar especialidad</h1>

@if (session()->has('info'))
<div class="alert alert-success">
	{{ session('info') }}
</div>
@endif
<form method="POST" action="{{ route('especialidades.update', $specialty) }}">
	@csrf @method('PATCH')
	<label>
		Nombre <br>
		<input type="text" name="name" value="{{ old('name', $specialty->name) }}">
	</label>
	<br>
	<button>Actualizar</button>
</form>

@endsection