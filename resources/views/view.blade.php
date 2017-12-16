{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Nasabah</title>
  </head>
  <body>
    @foreach ($nasabah as $nasabah1)

    <h1>Daftar Transaksi {{ $nasabah1->nama }}</h1>

    <h3>{{ $nasabah1->username }}</h3>
    <h3>{{ $nasabah1->saldo }}</h3>
    @endforeach

    <h2>Pemasukan</h2>
    @foreach ($transaksimasuk as $transaksimasuk1)
    <h3>{{ $transaksimasuk1->jumlah }} |||||||| {{ $transaksimasuk1->created_at }}</h3>
    @endforeach

    <h2>Pengeluaran</h2>
    @foreach ($transaksikeluar as $transaksikeluar1)
    <h3>{{$transaksikeluar1->jumlah }} |||||||| {{$transaksikeluar1->created_at }}</h3>
    @endforeach
  </body>
</html> --}}
@extends('layouts.master')

@section('content')
<div class="panel-body">
<h2 class="page-header">Riwayat Transaksi</h2>

@foreach($nasabah as $nasabah1)
<h4>{{$nasabah1->nama}}<h4>
<h4>{{$nasabah1->saldo}}<h4>
  <form action="/nasabah/{{$nasabah1->username}} " method="post">

  <input type="submit" name="submit" value="delete">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE">
@endforeach

 @foreach ($transaksimasuk as $transaksimasuk1)
<div class="table"
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Transaksi Masuk</a></li>
              <li><a href="#tab_2" data-toggle="tab">Transaksi Keluar</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box box-success">
                        <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Jenis Sampah</th>
                          <th>Berat Sampah</th>
                          <th>Total</th>
                          <th>Tanggal</th>
                        </tr>
                        </thead>

            <tbody>
            <td>
            <tr>
            <th>{{ $transaksimasuk1->jenis }}</th>
            <th>{{ $transaksimasuk1->berat }}</th>
            <td>{{ $transaksimasuk1->jumlah }}</td>
            <td>{{ $transaksimasuk1->created_at }}</td>
            </tr>
            </td>
            </tbody>
            </table>
               @endforeach
            </div>
            </div>
            </div>
          </div>
        </section>
      </div>

              @foreach ($transaksikeluar as $transaksikeluar1)
              <div class="tab-pane" id="tab_2">
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box box-success">
                        <div class="box-body">
                          <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th><b>Jumlah Penarikan</b></th>
                  <th><b>Tanggal</b></th>
                </tr>
                </thead>

        <tbody>
        <td>
        <tr>
            <td>{{ $transaksikeluar1->jumlah }}</td>
            <td>{{ $transaksikeluar1->created_at }}</td>
        </tr>
        </td>
        </tbody>
        </table>
        @endforeach
        </div>
        </div>
        </div>
        </div>
        </section>
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
