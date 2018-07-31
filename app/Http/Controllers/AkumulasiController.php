<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\absen;

class AkumulasiController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $absen = absen::all();
        return view('akumulasi.index', compact('absen','kelas'));
    }

    public function index2(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $kelas = $request->c;
        $absen = absen::whereBetween('tanggal', [$a, $b])->where('kelas_id','=',$kelas)->get();
        return view('akumulasi.index2', compact('absen', 'a','b','kelas'));
    }
}
