<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Nasabah;

class DaftarController extends Controller
{
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function create()
      {
        $active = 6;
        return view('/daftar');
      }

      public function store(Request $request)
      {
        $active = 7;
        $this->validate($request, [
          'nama'      => 'required|max:255|string',
          'username'  => 'required|max:255|alpha_num',
          'alamat'    => 'required|max:255|string',
          'no_hp'     => 'required|digits_between:12,15|numeric',
        ]);
        $nasabah = new Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->username = $request->username;
        $nasabah->alamat = $request->alamat;
        $nasabah->no_hp = $request->no_hp;
        $nasabah->save();

        return redirect('nasabah');
      }

      public function update(Request $request, $id)
      {
        $nasabah = new Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->username = $request->username;
        $nasabah->alamat = $request->alamat;
        $nasabah->saldo = $request->saldo;
        $nasabah->no_hp = $request->no_hp;
        $nasabah->save();
      }

      public function delete($id)
      {
        $nasabah = Nasabah::find($id);
        $nasabah->delete();
        return redirect('nasabah');
      }

}
