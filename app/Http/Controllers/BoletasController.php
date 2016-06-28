<?php

namespace App\Http\Controllers;

use App\Boleta;
use App\Http\Requests\CreateBoletaRequest;
use Illuminate\Http\Request;

use App\Http\Requests;

class BoletasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletas = Boleta::all();
        return view('boletas.index')->with('boletas',$boletas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boletas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBoletaRequest $request)
    {
        Boleta::create($request->all());
        return redirect()->route('boletas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('boletas.show')->with('boleta',Boleta::find($id));
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
        Boleta::destroy($id);
        return redirect()->route('boletas.index');
    }

    public function vista_agregar_producto($id)
    {
        $boleta = Boleta::find($id);
        return view('boletas.agregar_producto')->with('boleta',$boleta);
    }

    public function agregar_producto(Request $request,$id)
    {
        $boleta = Boleta::find($id);
        $boleta->productos()->attach($request->get('producto_id'),['cantidad'=> $request->get('cantidad')]);
        return redirect()->route('boletas.show',[$id]);
    }
}
