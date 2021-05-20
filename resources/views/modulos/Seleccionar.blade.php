@extends('plantilla')
@section('contenido')
<section class="content">
    <center>
        <h1>Seleccione como desea Ingresar al Sistema</h1>
    </center>
    <div class="row">
        {{-- Secretaria --}}
        <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #F781D8; color:white">
                <div class="inner">
                    <h3>Secretaria</h3>
                    <p>Inicie Sesion </p>
                </div>
                <div class="icon">
                    <i class=" fa fa-female"></i>
                </div>
                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>
        {{-- Doctor --}}
          <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color: #BDBDBD; color:white">
                <div class="inner">
                    <h3>Doctor</h3>
                    <p>Inicie Sesion </p>
                </div>
                <div class="icon">
                    <i class=" fa fa-user-md"></i>
                </div>
                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>
        {{-- Paciente --}}
         <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Paciente</h3>
                    <p>Inicie Sesion </p>
                </div>
                <div class="icon">
                    <i class=" fa fa-user-md"></i>
                </div>
                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>
        {{-- Administrador --}}
         <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Administrador</h3>
                    <p>Inicie Sesion </p>
                </div>
                <div class="icon">
                    <i class=" fa fa-user-md"></i>
                </div>
                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>
    </div>
</section>
@endsection

