<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Angkatan::latest()->get();
        return view('dashboard.angkatan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.angkatan.create');
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
            'thn_angkatan' => 'required',
        ]);
        $thn_angkatan = $request->thn_angkatan;

        Angkatan::create([
            'thn_angkatan' => $thn_angkatan
        ]);

        return redirect('admin/angkatan')->with('message','Data Berhasil Di Tambahkan');
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
        $data = Angkatan::findOrFail($id);
        return view('dashboard.angkatan.edit',compact('data'));
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
        $request->validate([
            'thn_angkatan' => 'required',
        ]);
        $data = Angkatan::findOrFail($id);
        $thn_angkatan = $request->thn_angkatan;
        $data->update([
            'thn_angkatan' => $thn_angkatan
        ]);
        return redirect('admin/angkatan')->with('message', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Angkatan::findOrFail($id);
        $data->delete();
        return redirect('admin/angkatan')->with('message', 'Data Berhasil Di Hapus');
    }
}
