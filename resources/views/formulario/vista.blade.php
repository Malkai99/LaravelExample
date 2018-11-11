@extends('layouts.app')

@section('title', 'Creacion de usuario')

@section('style')
	<link rel="stylesheet" href="{{asset('css/sumbit.css')}}">
	<style type="text/css">
		#btn{
			margin-left: 5rem;
		}
		.boton{
			margin-top: 1rem;
		}
	</style>
@endsection

@section('content')

	<h1 style="margin:1rem;">Ingreso de Usuario</h1>
	@include('common.errors')

	{!! Form::open(['route'=> 'user.store', 'method' => 'POST']) !!}
		@include('formulario.form')
		{!!Form::submit('Guardar', ['class'=> 'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection

@section('script')
	<script src="{{asset('js/sumbit.js')}}"></script>
@endsection
