<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Puesto;
use App\Models\Empresa;
use App\Models\User;
class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $puestos = Puesto::all();

        return view('puestos.index', compact('puestos',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puesto = new Puesto();
        $user = User::all();
        return view('puestos.create', compact('puesto', 'user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $puesto = new Puesto();
        $puesto->puesto = $request->get('puesto');
        $puesto->lugar = $request->get('lugar');
        $puesto->salario = $request->get('salario');
        $puesto->tipo_empleo = $request->get('tipo_empleo');
        $puesto->turno = $request->get('turno');
        $puesto->descripcion = $request->get('descripcion');
        $puesto->experiencia = $request->get('experiencia');
        $puesto->user_id = auth()->id();
        $puesto->save();

         return redirect()->route('puesto-index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}