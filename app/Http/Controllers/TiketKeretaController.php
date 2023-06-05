<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiketkereta;
use App\Models\kereta;
use App\Models\jadwal;
use App\Models\kota;
use App\Models\pengguna;
use Illuminate\Support\Facades\Session;
use PDF;

class TiketKeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = kereta::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketkereta :: with('kereta','jadwal','kota','pengguna')->get();
        return view('pages.tiket-kereta.tiketkereta',
        compact('kereta','jadwal','kota','pengguna'))->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kereta = kereta::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        return view('pages.tiket-kereta.create',[
            'kereta'=>$kereta,
            'jadwal'=>$jadwal,
            'kota'=>$kota,
            'pengguna'=>$pengguna,
        ]);
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
            'id_tiket' => 'required',
            'id_kereta' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_kereta' =>  $request->input('id_kereta'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];
        $kereta = kereta::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();

        tiketkereta::create($data);
        return redirect()->route('tiketkereta',
        compact('kereta','jadwal','kota','pengguna'))->with('success', 'Berhasil Melakukan Tambah Data');
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
        $kereta = kereta::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketkereta::where('id',$id)->first();
        return view('pages.tiket-kereta.edit',
        compact('kereta','jadwal','kota','pengguna'))->with('data', $data);
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
            'id_tiket' => 'required',
            'id_kereta' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_kereta' =>  $request->input('id_kereta'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];
        
        tiketkereta::where('id',$id)->update($data);
        return redirect()->route('tiketkereta')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiketkereta::where('id',$id)->delete();
        return redirect()->route('tiketkereta')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = tiketkereta::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.tiket-kereta.report');
        return $pdf->download('tiketkereta.pdf');
    }
}
