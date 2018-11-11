@extends('layouts.app')
@section('style')
	<style type="text/css">
		h1{
			margin: 1rem;
		}
		#btn{
			margin: 1rem;
		}

	</style>
@endsection
@section('title', 'Edicion de usuario')
@section('content')
	@include('common.errors')
	@include('common.success')
	<h1>Editar</h1>
	{!! Form::model($usuario, ['route' => ['user.update', $usuario->id], 'method' => 'PUT']) !!}
		@include('formulario.form')
		{!!Form::submit('Actualizar', ['class'=> 'btn btn-primary'])!!}
	{!!Form::close()!!}
	
@endsection