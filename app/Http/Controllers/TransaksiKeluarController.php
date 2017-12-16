<?php

namespace App\Http\Controllers;

use Illuminate\HTML\HtmlServicePr2ovider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiMasuk;
use App\Models\Sampah;
use App\Models\Nasabah;
use App\Models\TransaksiKeluar;

class TransaksiKeluarController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {

  }

  public function show($id)
  {
    $transaksikeluar = transaksikeluar::find($id);

    return view('view',['transaksikeluar' => $transaksikeluar] );
  }

  public function create()
  {
    $active = 14;
    $nasabah = Nasabah::all();
    $sampah = Sampah::all();

    return view('/tarik', ['sampah'=>$sampah,'nasabah'=>$nasabah]);
  }

  public function store(Request $request)
  {
    $active = 15;
    $this->validate($request, [
      'nasabah_user' => 'required|max:255|string',
      'jumlah'       => 'required|digits_between:0,255',
    ]);


    $where = $request->nasabah_user;
    $total_tarik = $request->jumlah;
    $cek = DB::table('nasabahs')->where('username', $where)->get();
    if($cek->count() > 0){
      foreach($cek as $ceksaldo)
        if($ceksaldo->saldo > $total_tarik){
        $total_saldo = $ceksaldo->saldo -  $total_tarik;
        DB::table('nasabahs')->where('username', $where)->update(['saldo'=>$total_saldo]);

        $transaksikeluar= New TransaksiKeluar;
        $transaksikeluar->nasabah_user = $request->nasabah_user;
        $transaksikeluar->jumlah = $request->jumlah;
        $transaksikeluar->save();
      }
        else{
        return redirect('tarik');
      }
    }
      else{
      return redirect('tarik');
    }
    return redirect('transaksi');
  }
}
