<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;
use Illuminate\Support\Facades\Session;
use PDF;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = jadwal :: all();
        return view('pages.jadwal.ijadwal')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jadwal.create');
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
            'tanggal_keberangkatan' => 'required',
            'waktu_keberangkatan' => 'required',
            'tanggal_tiba' => 'required',
            'waktu_tiba' => 'required',
        ]);
        jadwal::create($data);
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = jadwal::where('id',$id)->first();
        return view('pages.jadwal.edit')->with('data', $data);
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
        // $data = jadwal::find($id);
        // $data->update($request->all());
        // return redirect()->route('jadwal')->with('edit','Data Berhasil Diubah');
        $data = $request->validate([
            'tanggal_keberangkatan' => 'required',
            'waktu_keberangkatan' => 'required',
            'tanggal_tiba' => 'required',
            'waktu_tiba' => 'required',
        ]);
        jadwal::where('id',$id)->update($data);
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jadwal::where('id',$id)->delete();
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function reportpdf(){
        $data = jadwal::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.jadwal.report');
        return $pdf->download('datajadwal.pdf');
        // return('oke');
    }
}
