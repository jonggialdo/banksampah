{{-- @extends('layouts.master')

@section('title', 'Record Transaksi')

@section('content')
    @foreach ($transaksimasuk as $transaksimasuk1)
    <table class="table">
      <td>

        <tr>
            <th>{{ $transaksimasuk1->nasabah_user}} </th>
            <th>{{ $transaksimasuk1->jenis }}</th>
            <th>{{ $transaksimasuk1->berat }}</th>
            <td>{{ $transaksimasuk1->jumlah }}</td>
            <td>{{ $transaksimasuk1->created_at }}</td>
        </tr>

      </td>
    </table>
    @endforeach

    @foreach ($transaksikeluar as $transaksikeluar1)
    <table class="table">
      <td>

        <tr>

            <th>{{ $transaksikeluar1->nasabah_user}} </th>
            <td>{{ $transaksikeluar1->jumlah }}</td>
            <td>{{ $transaksikeluar1->created_at }}</td>
        </tr>

      </td>
    </table>
    @endforeach


@endsection('content') --}}


@extends('layouts.master')

@section('content')
<h2 class="page-header">Riwayat Transaksi</h2>
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
                  <th>No</th>
                  <th>Nasabah</th>
                  <th>Jenis Sampah</th>
                  <th>Berat Sampah</th>
                  <th>Total</th>
                  <th>Tanggal</th>
                  </tr>
                  </thead>

                  <p hidden>{{$no = 1}} </p>

      @foreach ($transaksimasuk as $transaksimasuk1)
        <tbody>
        <td>
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $transaksimasuk1->nasabah_user}} </td>
            <td>{{ $transaksimasuk1->jenis }}</td>
            <td>{{ $transaksimasuk1->berat }}</td>
            <td>{{ $transaksimasuk1->jumlah }}</td>
            <td>{{ $transaksimasuk1->created_at }}</td>
        </tr>
        </td>
       @endforeach
        </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

              <div class="tab-pane" id="tab_2">
                <section class="content">
                <div class="row">
                <div class="col-xs-12">
                <div class="box box-success">
                <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th><b>Nasabah</b></th>
                  <th><b>Jumlah Penarikan</b></th>
                  <th><b>Tanggal</b></th>
                </tr>
                </thead>

                <p hidden>{{$no = 1}} </p>

                 @foreach ($transaksikeluar as $transaksikeluar1)
                <tbody>
                <td>
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $transaksikeluar1->nasabah_user}} </td>
                  <td>{{ $transaksikeluar1->jumlah }}</td>
                  <td>{{ $transaksikeluar1->created_at }}</td>
                </tr>
                </td>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
   </div>
  </div>
</div>
@endsection
