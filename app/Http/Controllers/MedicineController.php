<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();

        return response()->json([
            'success' => true,
            'data'    => $medicines,
        ]);
    }

    public function all()
    {
        $medicines = Medicine::all();
        return view('index', [ 'medicines' => $medicines ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-medicine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $medicine = new Medicine;
        $medicine->name       = $input['name'];
        $medicine->frequency  = $input['frequency'];
        $medicine->start_date = $input['startDate'];
        $medicine->start_time = $input['startTime'];
        $medicine->end_date   = isset($input['endDate']) && $input['endDate'] ? $input['endDate'] : null;
        $medicine->end_time   = isset($input['endTime']) && $input['endTime'] ? $input['endTime'] : null;
        $medicine->color      = isset($input['color']) && $input['color'] ? $input['color'] : '#'.dechex(rand(0x000000, 0xFFFFFF));
        $medicine->save();

        return redirect('/');
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
