<?php

namespace App\Http\Controllers;
use App\Models\Aspirantes;
use Illuminate\Http\Request;

class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirantes = Aspirantes::all();
        //return $aspirantes;
        return view('lista_aspirantes', compact('aspirantes'));//con el metodo compact es para adjuntar una variable a la vista
        //permite mostrar una pagina de inicio, principal lista de los aspirantes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //sirve para devolcver uana vista de un formulario, con el que va a crear aspirantes, la vista que tiene el form -->GET
        return view('agregar_aspirante');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datos)
    {
        //permite guardar los datos procesados de un formulario-->POST 
        Aspirantes::create($datos->all());
        return redirect()->route('aspirantes.index')->with('mensaje', 'el aspirante fue dado de alta correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirantes $aspirante )
    {
        //return $aspirante;
        //muestra los datos o información de un aspirante en especifico
       return view('detalle_aspirante',compact('aspirante'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirantes $aspirante)
    {
        //devolver un formulario con datos precargados para editar -->GET 
        return view('editar_aspirante',compact('aspirante'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $datos, Aspirantes $aspirante)
    {
        //actualiza los datos en la BD con la información del formulario -->UPDATE
        $aspirante->update($datos->all());
        return redirect()->route('aspirantes.index')->with('mensaje', 'el aspirante fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirantes $aspirante)
    {
        //elimina un aspirante en la BD
        $aspirante ->delete();
        return back()->with('mensaje','El aspirante ha sido eliminado correctamente');

    }
}
