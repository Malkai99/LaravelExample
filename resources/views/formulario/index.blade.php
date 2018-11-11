@extends('layouts.app')
@section('style')
	<style type="text/css">
		.botones{
			margin: 1rem;
		}
		.alert{
			margin: 1rem;
		}
	</style>
@endsection
@section('title', 'Control de Usuario')
@section('content')
	<h1>Bienvenido</h1>
	@include('common.success')

	<div class="botones">	
		<a href="/user/create" class="btn btn-primary btn-lg">Crear Usuario</a>
		<a href="/user/show" class="btn btn-primary btn-lg">Mostrar Usuarios</a>
	</div>

@endsection