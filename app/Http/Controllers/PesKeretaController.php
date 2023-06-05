<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peskereta;
use Illuminate\Support\Facades\Session;
use PDF;

class PesKeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peskereta :: all();
        return view('pages.pesanan-kereta.peskereta')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pesanan-kereta.create');
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
            'id_pesanan' => 'required',
            'id_tiket' => 'required',
            'harga' => 'required'
        ]);
        peskereta::create($data);
        return redirect()->route('peskereta')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = peskereta::where('id',$id)->first();
        return view('pages.pesanan-kereta.edit')->with('data', $data);
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
            'id_pesanan' => 'required',
            'id_tiket' => 'required',
            'harga' => 'required'
        ]);
        peskereta::where('id',$id)->update($data);
        return redirect()->route('peskereta')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peskereta::where('id',$id)->delete();
        return redirect()->route('peskereta')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = peskereta::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.pesanan-kereta.report');
        return $pdf->download('pesanankereta.pdf');
    }
}
