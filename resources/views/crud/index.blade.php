@extends('layouts.app')

@section('content')


    <div class="container">

        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                {{ session('message') }}
            </div>
        @endif



        <a href="{{ route('empleados.create') }}" class="btn text-white btn-lg" style="background-color: #6D2373;">Crear Usuario</a>


       <div class="mt-5">
           <table class="table">
               <thead>
               <tr class="table-secondary table-bordered text-center">
                   <th scope="col">#</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Apellido</th>
                   <th scope="col">Ciudad</th>
                   <th scope="col">Edad</th>
                   <th scope="col">Acciones</th>
               </tr>
               </thead>

               @foreach($empleados as $empleado)
                   <tbody>

                        <tr class="table-secondary table-bordered text-center">
                            <th scope="col">{{ $empleado->id }}</th>
                            <th scope="col">{{ $empleado->Nombre }}</th>
                            <th scope="col">{{ $empleado->Apellido }}</th>
                            <th scope="col">{{ $empleado->Ciudad }}</th>
                            <th scope="col">{{ $empleado->Edad }}</th>
                            <th scope="col">
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST"> {{-- //Forma alternativa de llamar rutas con variable concatenada --}}
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{url('empleados/'.$empleado->id.'/edit')}}" class="btn text-white" style="background-color: #6D2373;">Editar</a>
                                    <button type="submit" class="btn text-white" style="background-color: darkred;">Borrar</button>
                                </form>

                            </th>
                        </tr>

                   </tbody>
               @endforeach


           </table>
       </div>





    </div>




@endsection

