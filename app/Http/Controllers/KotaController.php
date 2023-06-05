<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kota;
use Illuminate\Support\Facades\Session;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kota :: all();
        return view('pages.kota.ikota')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kota.create');
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
            'kode_kota' => 'required',
            'kota_asal' => 'required',
            'kota_tujuan' => 'required'
        ]);
        kota::create($data);
        return redirect()->route('kota')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = kota::where('id',$id)->first();
        return view('pages.kota.edit')->with('data', $data);
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
            'kode_kota' => 'required',
            'kota_asal' => 'required',
            'kota_tujuan' => 'required'
        ]);
        kota::where('id',$id)->update($data);
        return redirect()->route('kota')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kota::where('id',$id)->delete();
        return redirect()->route('kota')->with('success', 'Berhasil Melakukan Delete Data');
    }
}