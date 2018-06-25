<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Kelas;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view ('siswa.index',compact('kelas','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $a = Kelas::all();
        // return View('siswa.create', compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nis'=>'required ',
            'nama'=>'required',
            'kelas_id'=>'required',
            'jenis_kelamin'=>'required'
        ]);
        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('admin/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Kelas::all();
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa','a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id'=>'required',
            'jenis_kelamin'=>'required'
            ]);
        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
