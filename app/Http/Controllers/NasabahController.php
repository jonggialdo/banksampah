<?php

namespace App\Http\Controllers;

use Illuminate\HTML\HtmlServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiMasuk;
use App\Models\Sampah;
use App\Models\Nasabah;
use App\Models\TransaksiKeluar;

class NasabahController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $active = 8;
      $nasabah = Nasabah::all();
      return view('nasabah', ['nasabah'=>$nasabah]);
    }

    public function show($username)
    {
      $active = 9;
      $nasabah = DB::table('nasabahs')->where('username', $username)->get();
      $nasabah_user = request()->segment(2);
      $transaksimasuk = DB::table('transaksimasuks')->where('nasabah_user', $nasabah_user)->get();
      $transaksikeluar = DB::table('transaksikeluars')->where('nasabah_user', $nasabah_user)->get();
      return view('view',['nasabah' => $nasabah, 'transaksimasuk' => $transaksimasuk, 'transaksikeluar' => $transaksikeluar] );
    }

}
