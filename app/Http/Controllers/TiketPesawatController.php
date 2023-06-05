<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiketpesawat;
use App\Models\maskapai;
use App\Models\jadwal;
use App\Models\kota;
use App\Models\pengguna;
use Illuminate\Support\Facades\Session;
use PDF;

class TiketPesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maskapai = maskapai::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketpesawat :: with('maskapai','jadwal','kota','pengguna')->get();
        return view('pages.tiket-pesawat.tiketpesawat',
        compact('maskapai','jadwal','kota','pengguna'))->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maskapai = maskapai::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        return view('pages.tiket-pesawat.create',[
            'maskapai'=>$maskapai,
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
        // dd($request);
        $request->validate([
            'id_tiket' => 'required',
            'id_maskapai' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_maskapai' =>  $request->input('id_maskapai'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];
        $maskapai = maskapai::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();

        tiketpesawat::create($data);
        return redirect()->route('tiketpesawat',
        compact('maskapai','jadwal','kota','pengguna'))->with('success', 'Berhasil Melakukan Tambah Data');
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
        $maskapai = Maskapai::all();
        $jadwal = jadwal::all();
        $kota = kota::all();
        $pengguna = pengguna::all();
        $data = tiketpesawat::where('id',$id)->first();
        return view('pages.tiket-pesawat.edit', 
        compact('maskapai','jadwal','kota','pengguna'))->with('data',$data);
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
            'id_maskapai' => 'required',
            'id_jadwal' => 'required',
            'id_kota' => 'required',
            'id_pengguna' => 'required',
            'kelas' => 'required',
            'harga' => 'required'
        ]);

        $data=[
            'id_tiket' => $request->id_tiket,
            'id_maskapai' =>  $request->input('id_maskapai'),
            'id_jadwal' => $request->input('id_jadwal'),
            'id_kota' => $request->input('id_kota'),
            'id_pengguna' => $request->input('id_pengguna'),
            'kelas' => $request->kelas,
            'harga' =>  $request->harga
        ];

        tiketpesawat::where('id',$id)->update($data);
        return redirect()->route('tiketpesawat')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tiketpesawat::where('id',$id)->delete();
        return redirect()->route('tiketpesawat')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function report(){
        $data = tiketpesawat::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pages.tiket-pesawat.report');
        return $pdf->download('tiketpesawat.pdf');
    }
}
