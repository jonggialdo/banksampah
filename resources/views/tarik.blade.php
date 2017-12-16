{{-- @extends('layouts.master')

@section('title', 'Tarik Sampah')

@section('content')
    <form class="" action="/tarik" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Jumlah Yang Ditarik</h3>
      <input class="" type="text" name="jumlah" required> <hr>

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
              <h3 class="box-title">Tarik Tunai</h3>
            </div>
            
            <form class="form-horizontal" action="/tarik" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nasabah_user" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Jumlah Penarikan</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="jumlah" required>
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" name="submit" value="Create" class="btn btn-primary pull-right">Tarik Tunai</button>
                {{ csrf_field() }}
              </div>
            </form>
          </div>
        </div>
@endsection