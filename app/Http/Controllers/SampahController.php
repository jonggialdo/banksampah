<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sampah;

class SampahController extends Controller
{
  public function index()
  {
    $active = 1;
    $sampah = Sampah::all();
    return view('sampah', ['sampah'=>$sampah]);
  }

  public function show($id)
  {
    $active = 2;
    $sampah = Sampah::find($id);
    return view('trash',['sampah' => $sampah] );
  }

  public function delete($id)
  {
    $active = 3;
    $sampah = Sampah::find($id);
    $sampah->delete();
    return redirect('sampah');
  }

  public function create()
  {
    $active = 5;
    return view('/sampahbaru');
  }

  public function store(Request $request)
  {
    $active = 6;
    $this->validate($request, [
      'jenis_sampah' => 'required|max:255|string',
      'harga_sampah'       => 'required|digits_between:0,255',
    ]);
    
    $sampah = new Sampah;
    $sampah->jenis_sampah = $request->jenis_sampah;
    $sampah->harga_sampah = $request->harga_sampah;
    $sampah->save();

    return redirect('sampah');
  }
}
