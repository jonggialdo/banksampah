{{-- @extends('layouts.master')

@section('title', 'Setor Sampah')

@section('content')
    <form class="" action="/setor" method="post">

      <h3>Username</h3>
      <input class="" type="text" name="nasabah_user" required><hr>
      <h3>Berat_Sampah</h3>
      <input class="" type="text" name="berat" required> <hr>
      <select    name="jenis_sampah">
        @foreach($sampah as $sampah1)
        <option value="{{$sampah1->jenis_sampah}}">{{$sampah1->jenis_sampah}} </option>
        @endforeach
      </select><hr>
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
              <h3 class="box-title">Setor Sampah</h3>
            </div>

            <form class="form-horizontal" action="/setor" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="nasabah_user" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Berat Sampah (kg)</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="berat" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"> Jenis Sampah </label>
                 <div class="col-sm-8">
                <select class="form-control" name="jenis_sampah">
                  @foreach($sampah as $sampah1)
                  <option value="{{$sampah1->jenis_sampah}}">{{$sampah1->jenis_sampah}} </option>
                  @endforeach
                </select>
              </div>
              </div>

              <div class="box-footer" >
                <button type="submit" name="submit" value="Create" class="btn btn-primary pull-right">
                Setorkan Sampah</button>
                {{ csrf_field() }}

        {{-- <div class="col-md-6">
            <div class="box-body">
              <div class="callout callout-success">
                <h4>Sampah berhasil disetorkan.</h4>
              </div>
           </div>
        </div> --}}
                </div>
            </form>
          </div>
        </div>
@endsection
