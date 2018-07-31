<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absen;
use App\Kelas;

class FrontendController extends Controller
{
	public function index()
    {
        $kelas = Kelas::all();
        $absen = absen::all();
        return view('layouts.frontend', compact('absen','kelas'));
    }

    public function index2(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $kelas = $request->c;
        $absen = absen::whereBetween('tanggal', [$a, $b])->where('kelas_id','=',$kelas)->get();
        return view('layouts.akumulasifrontend', compact('absen', 'a','b','kelas'));
    }
}
