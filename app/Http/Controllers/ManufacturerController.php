<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic', ['only' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//  1     return Manufacturer::all();
//  2     return response()->json(Manufacturer::all());
//  3     return response()->json(['data' => Manufacturer::all()]);
        return response()->json(['data' => Manufacturer::all()], 202);
    }

    /**]
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Creando el fabricante";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->get('name') || !$request->get('website'))
            return response()->json(['msg' => 'Datos incompletos'], 404);
        else
        {
            $manufacturer = Manufacturer::create($request->all());
            return response()->json(['data' => $manufacturer, 'msg'=>'Manufacturer created'], 202);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer = Manufacturer::find($id);

        if ($manufacturer)
            return response()->json(['data' => $manufacturer], 202);
        else
            return response()->json(['msg' => 'Manufacturer ' . $id . ' not found'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Editando el fabricante con id $id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Actualizando el fabricante con id $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Eliminando el fabricante con id $id";
    }
}
