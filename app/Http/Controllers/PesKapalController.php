<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peskapal;
use Illuminate\Support\Facades\Session;
use PDF;

class PesKapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = peskapal :: all();
        return view('pages.pesanan-kapal.peskapal')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pesanan-kapal.create');
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
        peskapal::create($data);
        return redirect()->route('peskapal')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = peskapal::where('id',$id)->first();
        return view('pages.pesanan-kapal.edit')->with('data', $data);
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
        peskapal::where('id',$id)->update($data);
        return redirect()->route('peskapal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        peskapal::where('id',$id)->delete();
        return redirect()->route('peskapal')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = peskapal::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.pesanan-kapal.report');
        return $pdf->download('pesanankapal.pdf');
    }
}
