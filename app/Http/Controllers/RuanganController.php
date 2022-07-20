<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ruangan::latest()->get();

        return view('dashboard.ruangan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ruangan.create',[
            'fakultas' => Fakultas::get()
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
        $request->validate([
            'nama' => 'required',
            'lantai' => 'required'
        ]);

        $fakultas = $request->fakultas;
        $nama = $request->nama;
        $lantai = $request->lantai;

        Ruangan::create([
            'fakultas_id' => $fakultas,
            'nama' => $nama,
            'lantai' => $lantai
        ]);

        return redirect('admin/ruangan')->with('message','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ruangan::findOrFail($id);
        return view('dashboard.ruangan.edit',compact('data'),[
            'fakultas' => Fakultas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'lantai' => 'required'
        ]);
    
        $ruangan = Ruangan::findOrFail($id);
        $fakultas = $request->fakultas;
        $nama = $request->nama;
        $lantai = $request->lantai;
    
        $ruangan->update([
            'fakultas_id' => $fakultas,
            'nama' => $nama,
            'lantai' => $lantai
        ]);
        return redirect('admin/ruangan')->with('message', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return redirect('admin/ruangan')->with('message', 'Data Berhasil Di Hapus');
    }
}
