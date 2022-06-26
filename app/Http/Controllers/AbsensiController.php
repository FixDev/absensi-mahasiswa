<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Http\Request;
use stdClass;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs_id = session()->get('nim'); ---> pake ini kalo bisa ngambil session
        $data = Absensi::where('nim', '97701')->with(['matkul', 'mahasiswa'])->get();
        // dd($data);
        return view('absensi.index')->with('absensi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matkul = Matkul::all();
        $s_kehadiran = ['Alpa','Hadir','Izin','Sakit'];
        return view('absensi.form')->with('matkul', $matkul)->with('status', $s_kehadiran);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'waktu' => 'required',
            'nim' => 'required',
            'status' => 'required',
            'matkul_id' => 'required',
            // 'mahasiswa_id' => 'required',
        ]);

        $mhs = Mahasiswa::where('nim', $request->nim)->first();

        $abs = [
            "waktu"         => date('Y-m-d H:i:s'),
            "nim"           => $request->nim,
            "status"        => $request->status,
            "matkul_id"     => $request->matkul_id,
            "mahasiswa_id"  => $mhs->id ?? 10,
        ];

        // dd($abs);

        // $abs->mahasiswa_id  = $mhs->id ?? session()->get('mahasiswa_id'); --> pake ini klo bisa ngambil session
        // $abs->mahasiswa_id  = session()->get('mahasiswa_id');
        // dd($abs);

        Absensi::create($abs);

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
