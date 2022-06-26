<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uname_auth = Auth::user()->username;
        $queried_uname = User::where('username', $uname_auth)->first();
        $data = [];

        if ($queried_uname->dosen_id != null) {
            $id = $queried_uname->dosen_id;
            $data = User::with('dosen')
                ->where('dosen_id', $id)
                ->first();
        } else {
            $id = $queried_uname->mahasiswa_id;

            $data = User::with('mahasiswa')
                ->where('mahasiswa_id', $id)
                ->first();
        }
        return view('profile.index')->with('user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
