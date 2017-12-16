{{-- @extends('layouts.master')

@section('title', 'Daftar Sampah Baru')

@section('content')
    <form class="/sampahs" method="post">
      <input type="text" name="jenis_sampah" placeholder="jenis sampah" required><hr>
      <input type="text" name="harga_sampah" placeholder="harga sampah" required> <hr>
      <input type="submit" name="submit" value="Create">
      {{ csrf_field() }}
    </form>
@endsection('content') --}}


@extends('layouts.master')
@section('content')
<div class="panel-body">
<div class="col-md-10">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Sampah Baru</h3>
            </div>
      
            <form class="form-horizontal" class="/sampahs" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="jenis_sampah" class="col-sm-2 control-label">Jenis Sampah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="jenis_sampah">
                  </div>
                </div>

                <div class="form-group">
                  <label for="harga_sampah" class="col-sm-2 control-label">Harga Sampah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="harga_sampah">
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" name="submit" value="Create" class="btn btn-success pull-right">
                Tambahkan Sampah</button>
                {{ csrf_field() }}
              </div>
            </form>
          </div>
        </div>
@endsection