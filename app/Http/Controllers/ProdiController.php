<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Prodi::latest()->get();
        return view('dashboard.prodi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.prodi.create',[
            'fakultas' => Fakultas::all()
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
            'fakultas' => 'required',
            'nama' => 'required'
        ]);

        $fakultas = $request->fakultas;
        $nama = $request->nama;

        Prodi::create([
            'fakultas_id' => $fakultas,
            'nama' => $nama
        ]);

        return redirect('admin/prodi')->with('message','Data Berhasil Di Tambahkan');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
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
        $data = Prodi::findOrFail($id);
        return view('dashboard.prodi.edit',compact('data'),[
            'fakultas' => Fakultas::all()
        ]);
    }

        public function update(Request $request,$id)
        {
            $request->validate([
                'fakultas' => 'required',
                'nama' => 'required'
            ]);
    
            $prodi = Prodi::findOrFail($id);
            $fakultas = $request->fakultas;
            $nama = $request->nama;
    
            $prodi->update([
                'fakultas_id' => $fakultas,
                'nama' => $nama
            ]);
            return redirect('admin/prodi')->with('message', 'Data Berhasil Di Update');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Fakultas  $fakultas
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Prodi::findOrFail($id);
            $data->delete();
            return redirect('admin/prodi')->with('message', 'Data Berhasil Di Hapus');
        }
}
