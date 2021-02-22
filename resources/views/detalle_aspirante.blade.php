@extends('layouts.master')

@section('content')

<h1>Detalle del aspirante</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre:</th>
      <th scope="col">Edad:</th>
      <th scope="col">Correo:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$aspirante->nombre}}</td>
      <td>{{$aspirante->edad}}</td>
      <td>{{$aspirante->email}}</td>
    </tr> 
  </tbody>
</table>
@endsection
