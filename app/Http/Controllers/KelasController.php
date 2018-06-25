<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Jurusan;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view ('kelas.index',compact('jurusan','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $a = Jurusan::all();
       //  return View('kelas.create', compact('a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = new Kelas;
        $kelas->jurusan_id = $request->jurusan_id;
        $kelas->nama = $request->nama;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('admin/kelas');

        $this->validate($request,[
            'nama' => 'required',
            'wali_kelas' => 'required',
            'jurusan_id' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Jurusan::all();
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit',compact('kelas','a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jurusan_id'=>'required',
            'wali_kelas'=>'required'
            ]);
        $kelas = Kelas::findOrFail($id);
        $kelas->nama = $request->nama;
        $kelas->jurusan_id = $request->jurusan_id;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }
}
