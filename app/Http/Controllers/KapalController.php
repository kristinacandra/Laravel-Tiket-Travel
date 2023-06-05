<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kapal;
use Illuminate\Support\Facades\Session;

class KapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kapal :: all();
        return view('pages.kapal.ikapal')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kapal.create');
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
            'kode_kapal' => 'required',
            'nama_kapal' => 'required',
            'kode_rute' => 'required'
        ]);
        kapal::create($data);
        return redirect()->route('kapal')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = kapal::where('id',$id)->first();
        return view('pages.kapal.edit')->with('data', $data);
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
            'kode_kapal' => 'required',
            'nama_kapal' => 'required',
            'kode_rute' => 'required'
        ]);
        kapal::where('id',$id)->update($data);
        return redirect()->route('kapal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kapal::where('id',$id)->delete();
        return redirect()->route('kapal')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
