@extends('plantilla')
@section('content')

<div class="content-wrapper">

    <section class="content-header">

        <h1>Gestor de pacientes</h1>

    </section>

    <section class="content">

        <div class="box">

            <div class="box-header">
                <button class="btn btn-primary btn-lg">
                    Agregar Paciente
                </button>
            </div>

            <div class="box-body">

                <table class="table table-bordered table-hover table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre y apellido</th>
                            <th>Documento</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Editar / Borrar</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>11</td>
                            <td>Paciente</td>
                            <td>1212121</td>
                            <td>11@gmail.com</td>
                            <td>111111</td>
                            <td>

                                <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </section>
</div>


@endsection
