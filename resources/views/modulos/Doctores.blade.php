@extends('plantilla')
@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de Doctores</h1>

    </section>

    <section class="content">

        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearDoctor">Crear Doctor</button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover table-stripp dt-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre y Apellido</th>
                            <th>Consultorio</th>
                            <th>Email</th>
                            <th>Documento</th>
                            <th>Telefono</th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($doctores as $doctor)
                            @if($doctor->rol == "Doctor")
                            <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->CON->consultorio}}</td>
                            <td>{{$doctor->email}}</td>
                            @if($doctor->documento != "")
                                 <td>{{$doctor->documento}}</td>

                                 @else

                                   <td>Aun no registrado</td>

                            @endif

                             @if($doctor->telefono != "")
                                 <td>{{$doctor->telefono}}</td>

                                 @else

                                   <td>No disponible</td>

                            @endif

                                <td>
                                    <button class="btn btn-danger EliminarDoctor" Did="{{$doctor->id }}"><i class="fa fa-trash"></i></button>
                                </td>

                            </tr>

                            @endif
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </section>
</div>

<div id="CrearDoctor" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">

                @csrf

                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <h2>Nombre y apellidos</h2>
                            <input type="text" class="form-control input-lg" name="name" required>
                        </div>

                           <div class="form-group">
                                <h2>Sexo</h2>
                                <select class="form-control" name="sexo" id="">
                                    <option value="">Seleccionar</option>

                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <h2>Consultorio</h2>
                                <select class="form-control input-lg" name="id_consultorio" id="" required>
                                    <option value="">Seleccionar</option>
                                    @foreach ($consultorios as $consultorio)
                                        <option value="{{$consultorio->id}}">{{$consultorio->consultorio}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <h2>Email</h2>
                                <input type="text" class="form-control input-lg" name="email" value="{{old('email')}}" required>

                                @error('email')

                                    <div class="alert alert-danger"> El Email ya existe.</div>

                                @enderror
                            </div>

                              <div class="form-group">
                                <h2>Contrase??a</h2>
                                <input type="password" class="form-control input-lg" name="password" value="" required>
                            </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection
