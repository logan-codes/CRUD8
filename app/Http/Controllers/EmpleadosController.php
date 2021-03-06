<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleados::all(); //Trae todos los datos almacenados en la base de datos.
        return view('crud.index', compact('empleados')); //Regresa vista y le inyecta los datos de la variable $empleados
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'Nombre' => 'required|max:10',
            'Apellido' => 'required',
            'Ciudad' => 'required',
            'Edad' => 'required|integer|digits:2'
        ]);


        $empleados = new Empleados();
        $empleados->nombre = $request->get('Nombre'); //la key viene del nombre del elemento del formulario
        $empleados->apellido = $request->get('Apellido');
        $empleados->ciudad = $request->get('Ciudad');
        $empleados->edad = $request->get('Edad');

        $empleados->save(); //Almacena los valores obtenidos en la base de datos

        return redirect('empleados')->with('message', 'Dato Guardado'); //Regresa a la vista seleccionada y le pasa un mensaje asignado

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleados::find($id); // Buscando el dato por ID
        return view('crud.edit', compact('empleado')); //Mandando valores a la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $empleado = Empleados::find($id); //Se busca un solo empleado por el id

        $empleado->nombre = $request->get('Nombre'); //la key viene del nombre del elemento del formulario
        $empleado->apellido = $request->get('Apellido');
        $empleado->ciudad = $request->get('Ciudad');
        $empleado->edad = $request->get('Edad');

        $empleado->save();

        return redirect('empleados')->with('message', 'Empleado Actualizado');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $empleado = Empleados::find($id);
        $empleado->delete();

        return redirect('empleados')->with('message', 'Empleado Elimiando');

    }
}
