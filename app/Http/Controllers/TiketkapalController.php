<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiketkapal;
use App\Models\kapal;
use App\Models\jadwal;
use App\Models\kota;
use App\Models\pengguna;
use Illuminate\Support\Facades\Session;
use PDF;

class TiketkapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kapal = kapal::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketkapal :: with('kapal','jadwal','kota','pengguna')->get();
        return view('pages.tiket-kapal.tiketkapal',
        compact('kapal','jadwal','kota','pengguna'))->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kapal = kapal::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        return view('pages.tiket-kapal.create',[
            'kapal'=>$kapal,
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
            'id_kapal' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_kapal' =>  $request->input('id_kapal'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];
        $kapal = kapal::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();

        tiketkapal::create($data);
        return redirect()->route('tiketkapal',
        compact('kapal','jadwal','kota','pengguna'))->with('success', 'Berhasil Melakukan Tambah Data');
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
        $kapal = kapal::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketkapal::where('id',$id)->first();
        return view('pages.tiket-kapal.edit',
        compact('kapal','jadwal','kota','pengguna'))->with('data', $data);
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
            'id_kapal' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_kapal' =>  $request->input('id_kapal'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];

        tiketkapal::where('id',$id)->update($data);
        return redirect()->route('tiketkapal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiketkapal::where('id',$id)->delete();
        return redirect()->route('tiketkapal')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = tiketkapal::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.tiket-kapal.report');
        return $pdf->download('tiketkapal.pdf');
    }
}