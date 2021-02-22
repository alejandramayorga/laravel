@extends('layouts.master')

@section('titulo')

<H1 align="center"> Editar estudiantes </H1>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action={{ route('aspirantes.update', $aspirante->id)}} >
                    <fieldset>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                            @csrf
                            @method('PUT')
                                <input id="fname" name="nombre" type="text" placeholder="ingrese su nombre" class="form-control" value="{{old('nombre', $aspirante->nombre)}}" required>
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Ingrese su correo" class="form-control"value="{{old('email', $aspirante->email)}}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="edad" type="text" placeholder="Ingrese su edad" class="form-control" value="{{old('edad', $aspirante->edad)}}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
