<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
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
        //menampilkan semua data dari model inventaris
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'kode' => 'required|unique:inventaris', 
            'namaBarang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'hargaSatuan' => 'required',
            'lokasi' => 'required',
            'tahunPembuatan' => 'required|date',
            'tahunBeli' => 'required|date',
            'kondisi' => 'required',
        ]);

        $inventaris = new Inventaris();
        $inventaris->kode = $request->kode;
        $inventaris->namaBarang = $request->namaBarang;
        $inventaris->merk = $request->merk;
        $inventaris->jumlah = $request->jumlah;
        $inventaris->hargaSatuan = $request->hargaSatuan;
        $inventaris->lokasi = $request->lokasi;
        $inventaris->tahunPembuatan = $request->tahunPembuatan;
        $inventaris->tahunBeli = $request->tahunBeli;
        $inventaris->hargaKeseluruhan = $inventaris->jumlah * $inventaris->hargaSatuan;
        $inventaris->kondisi = $request->kondisi;
        $inventaris->save();
        return redirect()->route('inventaris.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.show', compact('inventaris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.edit', compact('inventaris'));
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
        // Validasi
        $validated = $request->validate([
            'kode' => 'required|unique:inventaris',
            'namaBarang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'hargaSatuan' => 'required',
            'lokasi' => 'required',
            'tahunPembuatan' => 'required',
            'tahunBeli' => 'required|date',
            'kondisi' => 'required',
        ]);

        $inventaris = Inventaris::findOrFail($id);
        $inventaris->kode = $request->kode;
        $inventaris->namaBarang = $request->namaBarang;
        $inventaris->merk = $request->merk;
        $inventaris->jumlah = $request->jumlah;
        $inventaris->hargaSatuan = $request->hargaSatuan;
        $inventaris->lokasi = $request->lokasi;
        $inventaris->tahunPembuatan = $request->tahunPembuatan;
        $inventaris->tahunBeli = $request->tahunBeli;
        $inventaris->hargaKeseluruhan = $inventaris->jumlah * $inventaris->hargaSatuan;
        $inventaris->kondisi = $request->kondisi;
        $inventaris->save();
        return redirect()->route('inventaris.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->delete();
        return redirect()->route('inventaris.index')
            ->with('success', 'Data berhasil dihapus!');
    }
    
}
