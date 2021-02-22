@extends('layouts.master')

@section('titulo')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <h1 align="center" scope="col">Lista de Estudiantes</h1>
      
    </tr>
  </thead>
  <tbody>
    <tr>

@endsection

@section('content')
@if(session()->has('mensaje'))
    <p style="color:red">{{session('mensaje')}}</p>
@endif

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Detalles</th>
      <th scope="col"></th>
      <td scope="col">
      <form action="{{route('aspirantes.create')}}"method="post">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-outline-primary">Agregar</button>
      </form>
      </td>
    </tr>
  </thead>
  <tbody>
  @foreach ($aspirantes as $aspirante)
    <tr>
      <td>{{$aspirante->nombre}}</td>
      <td>{{$aspirante->email}}</td>
      <td><a href="{{route('aspirantes.show',$aspirante->id)}}">Ver ficha</a></td>
      <td><a href="{{route('aspirantes.edit',$aspirante->id)}}">Editar</a></td>
      <td>
      <form action="{{route('aspirantes.destroy',$aspirante->id)}}"method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

