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
@section('title', 'Lista de usuario')
@section('content')
	@include('common.errors')
	@include('common.success')

	<h1>Lista de Usuarios</h1>
		<table class="table table-hover">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Email</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
	@foreach($usuarios as $usuario)
		  <tbody>
		    <tr>
		      <th scope="row">{{$usuario->id}}</th>
		      <td>{{$usuario->nombre}}</td>
		      <td>{{$usuario->apellido}}</td>
		      <td>{{$usuario->email}}</td>
		      <td>
		      		{{-- <div class="button">		      			
		      		{!!Form::open(['route' => ['user.edit', $usuario], 'method' => 'PUT'])!!}
		      	  		{!!Form::button('<i class="fas fa-edit"></i>', ['class' => 'btn btn-success'])!!}
		      	  	{!!Form::close()!!}
		      	  	{!!Form::open(['route' => ['user.destroy', $usuario], 'method' => 'DELETE'])!!}
		      	  		{!!Form::button('<i class="fas fa-trash-alt"></i>', ['href' => '/user/destroy' ,'class' => 'btn btn-danger', 'onclick'=> 'return confirm("Quiere borrar el registro?")'])!!}
		      	  	{!!Form::close()!!}
		      		</div> --}}
					
					<a href="/user/{{$usuario->id}}/edit" class="btn btn-success"  role="button">
		      	  	<i class="fas fa-edit"></i></a>

		      	  	{{-- <a href="{{ route('user.edit', [$usuario->nombre,$usuario->slug]) }}" class="btn btn-success"  role="button">
		      	  	<i class="fas fa-edit"></i></a> --}}
		      	  	<a class="btn btn-danger" href="{{ route('user.destroy', $usuario->id) }}" onclick="return confirm('Quiere borrar el registro?')" method="DELETE" role="button"><i class="fas fa-trash-alt">
		      	  	</i></a>

		      </td>
		    </tr>
		  </tbody>
	@endforeach
		</table>
		    {{-- {{ $usuario->links() }} --}}
		<a href="/user" id="btn" class="btn btn-primary btn-lg">Regresar</a>
@endsection