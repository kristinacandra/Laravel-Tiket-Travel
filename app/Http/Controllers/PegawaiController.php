<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use Illuminate\Support\Facades\Session;
use PDF;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pegawai :: all();
        return view('pages.pegawai.ipegawai')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pegawai.create');
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
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'jabatan' => 'required',
            'id_pesanan' => 'required'
        ]);
        pegawai::create($data);
        return redirect()->route('pegawai')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = pegawai::where('id',$id)->first();
        return view('pages.pegawai.edit')->with('data', $data);
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
            'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'jabatan' => 'required',
            'id_pesanan' => 'required'
        ]);
        pegawai::where('id',$id)->update($data);
        return redirect()->route('pegawai')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pegawai::where('id',$id)->delete();
        return redirect()->route('pegawai')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = pegawai::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.pegawai.report');
        return $pdf->download('datapegawai.pdf');
    }
}
