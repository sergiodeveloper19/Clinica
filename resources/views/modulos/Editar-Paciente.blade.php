@extends('plantilla')
@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <h1>Editar el Paciente: {{$paciente->name}}</h1>

    </section>

    <section class="content">

        <div class="box">
            <div class="box-header">
                <a href="{{url('Pacientes')}}">
                    <button class="btn btn-primary">Volver a pacientes</button>
                </a>
            </div>
            <div class="box-body">
                <form action="{{url('actualizar-paciente/'.$paciente->id)}}" method="post">
                    @csrf
                    @method('put')
                    <h2>Nombre y apellido</h2>
                    <input type="text" class="form-control input-lg" name="name"
                    value="{{$paciente->name}}">

                    <h2>Documento</h2>
                    <input type="text" class="form-control input-lg" name="documento"
                    value="{{$paciente->documento}}">

                    <h2>Email:</h2>
                    <input type="text" class="form-control input-lg" name="email"
                    value="{{$paciente->email}}">

                    <h2>Nueva Contraseña</h2>
                    <input type="text" class="form-control input-lg" name="password"
                    value="">

                    <input type="hidden" class="form-control input-lg" name="password"
                    value="{{$paciente->password}}">

                    <br><br>

                    <button class="btn btn-success" type="submit">Actualizar</button>


                </form>
            </div>
        </div>

    </section>
</div>


@endsection
