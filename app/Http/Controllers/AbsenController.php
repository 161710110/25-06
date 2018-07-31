<?php

namespace App\Http\Controllers;

use App\absen;
use App\Siswa;
use App\Kelas;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $absen = absen::all();
        $kelas = Kelas::all();
        return view ('absen.index',compact('siswa','absen','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $b = Siswa::all();
        // return View('absen.create', compact('b'));
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
            'tanggal'=>'required',
            'kelas_id'=>'required',
            'siswa_id'=>'required',
            'keterangan'=>'required'
        ]);
        $absen = new absen;
        $absen->tanggal = $request->tanggal;
        $absen->kelas_id = $request->kelas_id;
        $absen->siswa_id = $request->siswa_id;
        $siswa = Siswa::findOrFail($request->siswa_id);
        $absen->keterangan = $request->keterangan;
        $absen->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('admin/absen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Siswa::all();
        $absen = absen::findOrFail($id);
        return view('absen.edit',compact('absen','a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggal'=>'required',
            'siswa_id'=>'required',
            'keterangan'=>'required'
        ]);
        $absen = absen::findOrFail($id);
        $absen->tanggal = $request->tanggal;
        $absen->siswa_id = $request->siswa_id;
        $absen->keterangan = $request->keterangan;
        $absen->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('absen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absen=absen::findOrFail($id);
        $absen->delete();
        return redirect()->route('absen.index');
    }

    public function filter($id)
    {
        $siswa = Siswa::where('kelas_id', $id)->get();
        if($siswa->count() > 0){
            foreach ($siswa as $data) {
                echo '<option class="form-control" value="'.$data->id.'">'.$data->nama.'</option>';
            }
        }else{
            echo '<option class="form-control">Tidak Ada Hasil</option>';
        }
    }
}
