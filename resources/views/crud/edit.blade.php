@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white">Editar Usuario</h1>
        <div class="row">
            <div class="col-6">
                <form action="{{ url('empleados/'. $empleado->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label text-white">Nombre</label>
                        <input id="Nombre" name="Nombre" type="text" class="form-control" placeholder="Tu nombre aqui" value="{{$empleado->Nombre}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label text-white">Apellido</label>
                        <input id="Apellido" name="Apellido" type="text" class="form-control" placeholder="Tu apellido aqui" value="{{ $empleado->Apellido }}" required>
                    </div>

            </div>

            <div class="col-6">

                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label text-white">Ciudad</label>
                        <input id="Ciudad" name="Ciudad" type="text" class="form-control" placeholder="Tu ciudad aqui" value="{{ $empleado->Ciudad }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label text-white">Edad</label>
                        <input id="Edad" name="Edad" type="text" class="form-control" placeholder="Tu edad aqui" value="{{ $empleado->Edad }}" required>
                    </div>




            </div>



        </div>

        <div class="text-center  mt-5">
            <button type="submit" class="btn text-white" style="background-color: #6D2373;">Guardar</button>
        </div>

        </form>
    </div>

@endsection
