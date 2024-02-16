<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTindakanRequest;
use App\Http\Requests\UpdateTindakanRequest;
use App\Models\Pasien;
use App\Models\Tindakan;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tindakan.index', [
            'title' => 'tindakan',
            'tindakans' => Tindakan::latest()->get(),
            // 'pasien' => Pasien::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTindakanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTindakanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Tindakan $tindakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tindakan $tindakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTindakanRequest  $request
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTindakanRequest $request, Tindakan $tindakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tindakan $tindakan)
    {
        //
    }
}
