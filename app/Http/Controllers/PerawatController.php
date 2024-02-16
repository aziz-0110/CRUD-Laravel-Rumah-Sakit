<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Perawat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class PerawatController extends Controller
{
    // middleware untuk satu fungsi atau lebih
    // public function __construct()
    // {
    //     $this->middleware('isAdmin')->only('create');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // contoh autentikasi sederhana tanpa middleware
        // if (!auth()->check() || auth()->user()->name !== 'aziz') {
        //     abort(403);
        // }

        // $this->authorize('admin');  // untuk tes gate
        return view('perawat.index', [
            'title' => 'Perawat',
            'perawats' => Perawat::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perawat.create', [
            'title' => 'Perawat',
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
            'Tgl_Lahir' => 'required|date',
            'ID_Perawat' => 'required',
            'ID_Poliklinik' => 'required',
        ]);

        Perawat::create($validateData);
        return redirect('/perawat')->with('success', 'Perawat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perawat $perawat)
    {
        return view('perawat.detail', [
            'title' => "Perawat",
            'perawat' => $perawat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perawat $perawat)
    {
        return view('perawat.update', [
            'title' => 'Perawat',
            'perawat' => $perawat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perawat $perawat)
    {
        $validateData = $request->validate([
            'Nama' => 'required',
            'Alamat' => 'required',
            'Tgl_Lahir' => 'required|date',
            'ID_Perawat' => 'required',
            'ID_Poliklinik' => 'required',
        ]);

        Perawat::where('id', $perawat->id)->update($validateData);
        return redirect('/perawat')->with('success', 'Perawat berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perawat $perawat)
    {
        Perawat::destroy($perawat->id);
        return redirect('/perawat')->with('success', 'Perawat berhasil dihapus');
    }
}
