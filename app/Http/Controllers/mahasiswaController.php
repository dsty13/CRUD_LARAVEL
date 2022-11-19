<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Mahasiswa.index')->with([
            'mahasiswa' => mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mahasiswa::create([
        //     'nrp'=> $request->nrp,
        //     'nama'=> $request->nama,
        //     'email'=> $request->email,
        //     'alamat'=> $request->alamat,
        // ]);
        // return to_route('data')->with('success', 'Data Berhasil Ditambah');
         $request->validate([
            'nrp' =>'required',
            'nama' =>'required',
            'email' =>'required',
            'alamat' =>'required',
            
         ]); 
         $mahasiswa = new mahasiswa;
         $mahasiswa ->nrp =$request->nrp;  
         $mahasiswa ->nama =$request->nama;  
         $mahasiswa ->email =$request->email;  
         $mahasiswa ->alamat =$request->alamat;
         $mahasiswa ->save();
         return to_route('Mahasiswa.index');  
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
        return view('Mahasiswa.edit')->with([
            'mahasiswa' => mahasiswa::find($id),
        ]);
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
            'nrp' =>'required',
            'nama' =>'required',
            'email' =>'required',
            'alamat' =>'required',
            
         ]); 
         $mahasiswa = mahasiswa::find($id);
         $mahasiswa ->nrp =$request->nrp;  
         $mahasiswa ->nama =$request->nama;  
         $mahasiswa ->email =$request->email;  
         $mahasiswa ->alamat =$request->alamat;
         $mahasiswa ->save();
         return to_route('Mahasiswa.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();

        return back()->with('success','Data Berhasil Dihapus.');
    }
}
