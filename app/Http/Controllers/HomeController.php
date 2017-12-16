<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\HTML\HtmlServicePr2ovider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TransaksiMasuk;
use App\Models\Sampah;
use App\Models\Nasabah;
use App\Models\TransaksiKeluar;
use Charts;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $active='dashboard';
      $sum_berat = 0;
      $i = 0;
      $sum_masuk = 0;
      $sum_keluar = 0;
      $sampahs = DB::table('transaksimasuks')->select('berat')->get();
      $hitung_nasabah = Nasabah::all();
      $hitung_masuk =  DB::table('transaksimasuks')->select('jumlah')->get();
      $hitung_keluar =  DB::table('transaksikeluars')->select('jumlah')->get();
      $transaksikeluars = TransaksiKeluar::where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"), date('Y'))->get();
      $transaksimasuks = TransaksiMasuk::where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"), date('Y'))->get();
      $nasabahs = Nasabah::where(DB::raw("(DATE_FORMAT(created_at, '%Y'))"), date('Y'))->get();
      $chart = Charts::database($transaksikeluars, 'line', 'highcharts')
                ->title('transaksi keluar')
                ->elementLabel('banyaknya transaksi keluar')
                ->dimensions(800, 300)
                ->responsive(false)
                ->groupByMonth(date('Y'), true);
      $chart2 = Charts::database($transaksimasuks, 'line', 'highcharts')
                ->title('Transaksi Masuk')
                ->elementLabel('Banyak Transaksi Masuk')
                ->dimensions(800, 300)
                ->responsive(false)
                ->groupByMonth(date('Y'), true);

      foreach($sampahs as $sampah)
        $sum_berat += ($sampah->berat);

      foreach($hitung_nasabah as $nasabah)
        $i++;

      foreach($hitung_masuk as $masuk)
        $sum_masuk += ($masuk->jumlah);

      foreach($hitung_keluar as $keluar)
        $sum_keluar += ($keluar->jumlah);

      return view('home', compact('chart', 'chart2', 'sum_berat', 'i', 'sum_masuk', 'sum_keluar'));
    }
}

