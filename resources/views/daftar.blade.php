{{-- @extends('layouts.master')

@section('title', 'Daftar Nasabah')

@section('content')

    @if(count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form class="/nasabahs" method="post">
      <input type="text" name="nama" placeholder="nama" required><hr>
      <input type="text" name="username" placeholder="username" required> <hr>
      <input type="text" name="alamat" placeholder="alamat" required> <hr>
      <input type="text" name="no_hp" placeholder="no_hp" required> <hr>
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
              <h3 class="box-title">Tambahkan Nasabah Baru</h3>
            </div>
            @if(count($errors) > 0)
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

            <form class="form-horizontal" class="/nasabahs" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No.HP</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_hp" required>
                  </div>
                </div>

              <div class="box-footer">
                <button type="submit" name="submit" value="Create" class="btn btn-success pull-right">
                Tambahkan Nasabah</button>
                {{ csrf_field() }}
              </div>
            </form>
          </div>
        </div>
@endsection
