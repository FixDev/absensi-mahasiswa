<?php

namespace App\Http\Controllers;

use App\Models\Matkul;


use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Matkul::all();

        return view('matkul.index')->with('matkul', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matkul.form');
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
            'nama' => 'required',
            'kode' => 'required',
            'semester' => 'required',
        ]);

        Matkul::create($request->all());

        return redirect()->route('matkul.index')
            ->with('success', 'Mata kuliah berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Matkul::findOrFail($id);
        return view('matkul.view')->with('matkul', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Matkul::findOrFail($id);
        return view('matkul.form')->with('matkul', $data);
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
            'nama' => 'required',
            'kode' => 'required',
            'semester' => 'required',
        ]);

        $matkul = Matkul::findOrFail($id);

        $matkul->update($request->all());

        return redirect()->route('matkul.show', $matkul->id)
            ->with('success', 'Mata Kuliah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::findOrFail($id);

        $matkul->delete();

        return redirect()->route('matkul.index')
            ->with('success', 'Mata Kuliah berhasil dihapus.');
    }
}
