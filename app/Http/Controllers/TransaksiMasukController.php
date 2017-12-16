<?php

namespace App\Http\Controllers;

use Illuminate\HTML\HtmlServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiMasuk;
use App\Models\Sampah;
use App\Models\Nasabah;
use App\Models\TransaksiKeluar;
use Validator;

class TransaksiMasukController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $active = 10;
    $transaksimasuk = TransaksiMasuk::all();
    $transaksikeluar = TransaksiKeluar::all();
    return view('transaksi', ['transaksimasuk' => $transaksimasuk, 'transaksikeluar' => $transaksikeluar]);

  }

  public function show($id)
  {
    $active = 11;
    $transaksimasuk = TransaksiMasuk::find($id);

    return view('view',['transaksimasuk' => $transaksimasuk] );
  }

  public function create()
  {
    $active = 12;
    $nasabah = Nasabah::all();
    $sampah = Sampah::all();

    return view('/setor', ['sampah'=>$sampah,'nasabah'=>$nasabah]);
  }


  public function store(Request $request)
  {

    $this->validate($request, [
      'nasabah_user'      => 'required|max:255|string',
      'berat'     => 'required|digits_between:0,255',
    ]);


    $where = $request->nasabah_user;
    $where1 = $request->jenis_sampah;
    $cek = DB::table('nasabahs')->where('username', $where)->get();
    $cek_harga = DB::table('sampahs')->where('jenis_sampah', $where1)->get();
    if($cek->count() > 0){
      foreach($cek_harga as $harga)
        $total_harga = $request->berat * $harga->harga_sampah;
      foreach($cek as $ceksaldo)
        $total_saldo = $total_harga + $ceksaldo->saldo;
        DB::table('nasabahs')->where('username', $where)->update(['saldo'=>$total_saldo]);
        $transaksimasuk = new TransaksiMasuk;
        $transaksimasuk->nasabah_user = $request->nasabah_user;
        $transaksimasuk->berat = $request->berat;
        $transaksimasuk->jenis = $harga->jenis_sampah;
        $transaksimasuk->jumlah = $total_harga;
        $transaksimasuk->save();
    }
    return redirect('transaksi');
  }
}
