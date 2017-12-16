@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h2><b>{{$i}}</b></h2>
              <p>Nasabah</p>
            </div>

            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="#" class="small-box-footer"><i class=""></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h2><b>{{$sum_berat}} kg</b></h2>
              <p>Berat Sampah</p>
            </div>

            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class=""></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h2><b>Rp. {{$sum_masuk}}</b></h2>
              <p>Transaksi Masuk</p>
            </div>

            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="#" class="small-box-footer"><i class=""></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h2><b>Rp {{$sum_keluar}}</b></h2>
              <p>Transaksi Keluar</p>
            </div>

            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
            <a href="#" class="small-box-footer"><i class=""></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <section class="col-lg-10 connectedSortable">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1" data-toggle="tab">Transaksi Masuk</a></li>
              <li><a href="#tab_2" data-toggle="tab">Transaksi Keluar</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <section class="content">
                  <div class="row">
                  <div class="col-xs-10">
                  <head>
                  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
                  <script src="http://code.highcharts.com/highcharts.js"></script>
                  <script src="http://code.highcharts.com/modules/exporting.js"></script>

                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE-edge">
                  <meta name="viewport" content="">
                  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
                  </head>

                  <body>
                  <div id="container" style="min-width: 300px; height: 300px; margin: 0 auto">
                  {!! $chart2->render() !!}
                  </div>
                  </body>
                  </div>
                  </div>
                </section>
              </div>
              
              <div class="tab-pane" id="tab_2">
              <section class="content">
              <div class="row">
              <div class="col-lg-10">
              <head>
              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
              <script src="http://code.highcharts.com/highcharts.js"></script>
              <script src="http://code.highcharts.com/modules/exporting.js"></script>

              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE-edge">
              <meta name="viewport" content="">
              <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
              </head>
              
              <body>
                <div id="container" style="min-width: 300px; height: 300px; margin: 0 auto">
                {!! $chart->render() !!}
                </div>
                </body>
                </div>
                </div>
                </section>
            </div>
          </div>

          <!-- Calendar -->
          {{-- <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div> --}}
        </section>
      </div>
  @endsection
