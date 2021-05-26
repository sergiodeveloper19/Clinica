@extends('plantilla')
@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <h2>Horarios </h2>

        @if($horarios == null)
            <form action="{{ url('Horario')}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-2">
                        Desde <input type="time"
                        class="form-control" name="horaInicio">
                    </div>

                     <div class="col-md-2">
                        Hasta <input type="time" class="form-control" name="horaFin">
                    </div>

                    <br>

                    <div class="col-md-1">

                        <button type="submit" class="btn btn-success">
                            Guardar
                        </button>

                    </div>

                </div>
            </form>

        @else

        @foreach ($horarios as $hora)
             <form action="{{url('editar-horario/'.$hora->id )}}" method="post">
                @csrf
                @method('put')

                <div class="row">

                    <div class="col-md-2">
                        Desde <input type="time"
                        class="form-control" name="horaInicioE" value="{{$hora->horaInicio}}">
                    </div>

                     <div class="col-md-2">
                        Hasta <input type="time" class="form-control" name="horaFinE" value="{{$hora->horaFin}}">
                    </div>

                    <br>

                    <div class="col-md-1">

                        <button type="submit" class="btn btn-success">
                            Editar
                        </button>

                    </div>

                </div>
            </form>

        @endforeach


        @endif
    </section>

    <section class="content">

        <div class="box">
            <div class="box-body">
                <div id="calendario">

                </div>
            </div>
        </div>

    </section>
</div>

<div class="modal fade" id="CitaModal">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="" method="post">

                @csrf

                <div class="modal-body">

                    <div class="box-body">

                        <div class="form-group">

                            <h2>Seleccionar Paciente</h2>

                            <input type="text" name="id_doctor" value="{{ auth()->user->id}}">

                            <select required="" name="id_paciente" >


                                @foreach ($pacientes as $paciente)

                                    @if($paciente->rol == "Paciente")

                                        <option value="{{$paciente->id}}">{{$paciente->name}}-{{$paciente->documento}}</option>


                                    @endif


                                @endforeach

                            </select>

                        </div>

                          <div class="form-group">

                            <h2>Fecha</h2>
                            <input type="text" class="form-control input-lg" id="Fecha" readonly="">
                        </div>

                          <div class="form-group">

                            <h2>Hora</h2>
                            <input type="text" class="form-control input-lg" id="Hora" readonly="">

                            <input type="hidden" name="FyHinicio" class="form-control input-lg" id="FyHinicio" readonly="">

                            <input type="hidden" name="FyHfinal" class="form-control input-lg" id="FyHfinal" readonly="">


                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">
                        Pedir cita
                    </button>

                     <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Cancelar
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
