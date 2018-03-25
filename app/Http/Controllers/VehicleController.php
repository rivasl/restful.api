<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic', ['only' =>'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($manufacturer_id)
    {
        $manufacturer = Manufacturer::find($manufacturer_id);

        $vehicles = $manufacturer->vehicles;

        if ($vehicles)
            return response()->json(['data' => $vehicles], 202);
        else
            return response()->json(['msg' => 'Manufacturer without vehicles'], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($manufacturer_id)
    {
        return "Mostrando formulario para crear vehiculo del fabricante $manufacturer_id";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($manufacturer_id, $vehicle_id)
    {
        $vehicle = Vehicle::where('manufacturer_id', '=', $manufacturer_id)
            ->where('id', '=', $vehicle_id)
            ->limit(1)
            ->get();

        if ($vehicle)
            return response()->json(['data' => $vehicle], 202);
        else
            return response()->json(['msg' => 'Manufacturer without vehicles'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($manufacturer_id, $vehicle_id)
    {
        return "Editando el vehiculo $vehicle_id del fabricante $manufacturer_id";

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
