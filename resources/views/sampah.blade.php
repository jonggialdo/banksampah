{{-- @extends('layouts.master')

@section('title', 'Daftar Sampah')

@section('content')
    @foreach ($sampah as $sampah1)
    <table style="width:100%">
      <td>
        <tr>
          <a href="/sampah/{{$sampah1->id}}">{{ $sampah1->jenis_sampah}}</a> <br>
          <a href="/sampah/{{$sampah1->id}}">{{ $sampah1->harga_sampah}}</a>
        </tr>
        <tr>
          <form action="/sampah/{{$sampah1->id}} " method="post">

            <input type="submit" name="submit" value="delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
          </form>
        </tr>

      </td>
    </table>
    @endforeach

@endsection('content') --}}

@extends('layouts.master')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Sampah</h3>
            </div>

            <div class="box-body">

              <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Jenis Sampah</th>
                  <th>Harga Sampah</th>
                  <th>Opsi</th>
                  </tr>

                  <p hidden>{{$no = 1}} </p>
                @foreach ($sampah as $sampah1)

                <tbody>
                <tr>
                <td>{{ $no++ }}</td>
                <td><a>{{ $sampah1->jenis_sampah}}</a></td>
                <td><a>{{ $sampah1->harga_sampah}}</a></td>
                <td><form action="/sampah/{{$sampah1->id}} " method="post">

                  <input type="submit" name="submit" value="delete">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                </form> </td>
                </tr>
                </tbody>
                @endforeach
              </table>

            </div>

          </div>
        </div>
      </div>
    </section>

@endsection
