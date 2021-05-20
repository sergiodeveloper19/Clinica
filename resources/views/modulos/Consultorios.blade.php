@extends('plantilla')
@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de Consultorios</h1>

    </section>

    <section class="content">

        <div class="box">

            <br>

            <form action="" method="post">
                 @csrf
                <div class="col-md-6 col-xs-12">
                    <input type="text" class="form-control" name="consultorio" placeholder="Ingrese nuevo Consultorio" required="">
                </div>

                <button class="btn btn-primary" type="submit">Agregar Consultorio</button>

            </form>

            <br>

            <div class="box-body">
                @foreach ($consultorios as $consultorio)
                      <div class="row">
                        <form action="{{url ('Consultorios/'.$consultorio->id)}}" method="post">

                            @csrf
                            @method('PUT')

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="consultorioE" value="{{$consultorio->consultorio}}">
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-success" type="submit"> Guardar</button>
                                </div>

                        </form>
                        <div class="col-md-1">

                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Borrar</button>

                        </form>

                    </div>
                </div>
                <br>
                @endforeach


            </div>
        </div>

    </section>
</div>


@endsection
