@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-white">Crear Usuario</h1>
        <div class="row">
            <div class="col-6">
                <form action="{{ route('empleados.store') }}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="" class="form-label text-white">Nombre</label>
                    <input id="Nombre" name="Nombre" type="text" class="form-control{{ $errors->has('Nombre') ? ' is-invalid' : '' }}" placeholder="Tu nombre aqui">

                    @if ($errors->has('Nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Nombre') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-white">Apellido</label>
                    <input id="Apellido" name="Apellido" type="text" class="form-control{{ $errors->has('Apellido') ? ' is-invalid' : '' }}" placeholder="Tu apellido aqui">

                    @if ($errors->has('Apellido'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Apellido') }}</strong>
                        </span>
                    @endif
                </div>



            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label text-white">Ciudad</label>
                    <input id="Ciudad" name="Ciudad" type="text" class="form-control{{ $errors->has('Ciudad') ? ' is-invalid' : '' }}" placeholder="Tu ciudad aqui">

                    @if ($errors->has('Ciudad'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Ciudad') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-white">Edad</label>
                    <input id="Edad" name="Edad" type="text" class="form-control{{ $errors->has('Edad') ? ' is-invalid' : '' }}" placeholder="Tu edad aqui">

                    @if ($errors->has('Edad'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Edad') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

        </div>

        <div class="text-center text-white mt-5">
            <button type="submit" class="btn" style="background-color: #6D2373;">Guardar</button>
        </div>

        </form>
    </div>
@endsection
