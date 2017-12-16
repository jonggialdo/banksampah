<!DOCTYPE html>
<html>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <meta charset="utf-8">
    <title>asasas</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
          <h1>Nasabah</h1>
          {!! $chart->render() !!}
          {!! $chart2->render() !!}


        </div>
  </body>
</html>
