<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kereta;
use Illuminate\Support\Facades\Session;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kereta :: all();
        return view('pages.kereta.ikereta')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kereta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_kereta' => 'required',
            'nama_kereta' => 'required',
            'kode_rute' => 'required'
        ]);
        kereta::create($data);
        return redirect()->route('kereta')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = kereta::where('id',$id)->first();
        return view('pages.kereta.edit')->with('data', $data);
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
        $data = $request->validate([
            'kode_kereta' => 'required',
            'nama_kereta' => 'required',
            'kode_rute' => 'required'
        ]);
        kereta::where('id',$id)->update($data);
        return redirect()->route('kereta')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kereta::where('id',$id)->delete();
        return redirect()->route('kereta')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
