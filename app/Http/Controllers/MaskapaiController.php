<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\maskapai;
use Illuminate\Support\Facades\Session;

class MaskapaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = maskapai :: all();
        return view('pages.maskapai.imaskapai')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.maskapai.create');
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
            'kode_maskapai' => 'required',
            'nama_maskapai' => 'required',
            'kode_rute' => 'required'
        ]);
        maskapai::create($data);
        return redirect()->route('maskapai')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = maskapai::where('id',$id)->first();
        return view('pages.maskapai.edit')->with('data', $data);
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
            'kode_maskapai' => 'required',
            'nama_maskapai' => 'required',
            'kode_rute' => 'required'
        ]);
        maskapai::where('id',$id)->update($data);
        return redirect()->route('maskapai')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        maskapai::where('id',$id)->delete();
        return redirect()->route('maskapai')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
