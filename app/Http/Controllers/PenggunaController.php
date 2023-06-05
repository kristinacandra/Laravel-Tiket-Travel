<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\Session;
use PDF;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pengguna :: all();
        return view('pages.pengguna.ipengguna')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengguna.create');
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
            'id_pengguna' => 'required',
            'nama_pengguna' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        pengguna::create($data);
        return redirect()->route('pengguna')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = pengguna::where('id',$id)->first();
        return view('pages.pengguna.edit')->with('data', $data);
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
            'id_pengguna' => 'required',
            'nama_pengguna' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required'
        ]);
        pengguna::where('id',$id)->update($data);
        return redirect()->route('pengguna')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengguna::where('id',$id)->delete();
        return redirect()->route('pengguna')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = pengguna::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.pengguna.report');
        return $pdf->download('datapengguna.pdf');
    }
}
