<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akumulasi extends Model
{
    public function index()
    {
        $kelas = Kelas::all();
        $absensi = absensi::all();
        return view('akumulasi.index', compact('absensi','kelas'));
    }

    public function index2(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $kelas = $request->c;
        $absensi = absensi::whereBetween('created_at', [$a, $b])->where('id_kelas','=',$kelas)->get();
        return view('akumulasi.index2', compact('absensi', 'a','b','kelas'));
    }
}
