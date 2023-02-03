<?php

namespace App\Http\Controllers;

use App\Models\Rekamedis;
use App\Http\Requests\StoreRekamedisRequest;
use App\Http\Requests\UpdateRekamedisRequest;


class RekamedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rekamedis = Rekamedis::paginate(10);
        return response()->json([
            'data' => $Rekamedis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Rekamedis/create'
                  );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremahasiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRekamedisRequest $request)
    {
        $Rekamedis = Rekamedis::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon
        ]);
        return response()->json([
            'data' => $Rekamedis
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekamedis  $koprasi
     * @return \Illuminate\Http\Response
     */
    public function show(Rekamedis $Rekamedis)
    {
        return response()->json([
            'data' => $Rekamedis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekamedis  $koprasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Rekamedis = Rekamedis::find($id);
   
        return view('Rekamedis/update', [
                'Rekamedis' => $Rekamedis
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRekamedisRequest  $request
     * @param  \App\Models\Rekamedis  $Rekamedis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRekamedisRequest $request)
    {
        $Rekamedis = Rekamedis::create([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon
        ]);
        return response()->json([
            'data' => $Rekamedis
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekamedis  $Rekamedis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus dari database
        $Rekamedis = Rekamedis::find($id);
        $Rekamedis->delete();
        return response()->json([
            'message' => 'Rekamedis deleted'
        ]);
    }
}