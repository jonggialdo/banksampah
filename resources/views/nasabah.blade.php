{{-- @extends('layouts.master')

@section('title', 'Daftar Nasabah')

@section('content')
    @foreach ($nasabah as $nasabah1)
    <table class="table">
      <td>
        <tr>
          <a href="/nasabah/{{$nasabah1->username}}">{{ $nasabah1->nama}}</a>
        </tr>
        <tr>
          <form action="/nasabah/{{$nasabah1->username}} " method="post">



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
              <h3 class="box-title">Daftar Nasabah</h3>
            </div>



              <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Saldo</th>
                  <th style="width: 100px">Opsi</th>
                </tr>

                <p hidden>{{$no = 1}} </p>
                @foreach ($nasabah as $nasabah1)

                <tbody>
                <tr>
                  <td>{{$no++}}</td>
                <td><a href="/nasabah/{{$nasabah1->username}}">{{ $nasabah1->nama}}</a></td>
                </form>
                <td>{{ $nasabah1->username }}</td>
                <td>{{ $nasabah1->saldo}}</a></td>

                <td>
                <form action="/nasabah/{{$nasabah1->id}} " method="post">
                <input type="submit" name="submit" value="delete">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                </tr>
                </tbody>
                @endforeach
              </table>

            </div>

          </div>
        </div>

    </section>

@endsection
