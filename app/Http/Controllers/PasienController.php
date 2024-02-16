<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pasien $pasien)
    {
        return view('pasien.index', [
            'title' => 'Pasien',
            // 'pasiens' => $pasien->latest()->get(),
            'pasiens' => $pasien->latest()->paginate(2)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create', [
            'title' => 'Pasien',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'TTL' => 'required',
            'Jenis_Kelamin' => 'required',
            'Pekerjaan' => 'required',
            'No_RM' => 'required',
        ]);

        Pasien::create($validateData);
        return redirect('/pasien')->with('success', 'Pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.detail', [
            'title' => 'Pasien',
            'pasien' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.update', [
            'title' => 'Pasien',
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validateData = $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'TTL' => 'required',
            'Jenis_Kelamin' => 'required',
            'Pekerjaan' => 'required',
            'No_RM' => 'required',
        ]);

        Pasien::where('id', $pasien->id)->update($validateData);
        return redirect('/pasien')->with('success', 'Pasien berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);
        return redirect('/pasien')->with('success', 'Pasien berhasil dihapus');
    }
}
