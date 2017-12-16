<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
  protected $fillable = ['jenis', 'harga'];

  public function transaksis()
   {


       return $this->belongsToMany('App\Models\Transaksi');
   }

   public function client()
   {
     return $this->belongsToMany('App\Models\Nasabah');
   }
 }
