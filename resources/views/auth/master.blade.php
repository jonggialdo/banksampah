<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href={{asset("dashboard/img/apple-icon.png")}}>
	<link rel="icon" type="image/png" sizes="96x96" href={{asset("dashboard/img/favicon.png")}}>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bank Sampah</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href={{asset("dashboard/css/bootstrap.min.css")}} rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href={{asset("dashboard/css/animate.min.css")}} rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href={{asset("dashboard/css/paper-dashboard.css")}} rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href={{asset("dashboard/css/demo.css")}} rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="{{asset("http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href={{asset("https://fonts.googleapis.com/css?family=Muli:400,300")}} rel='stylesheet' type='text/css'>
    <link href={{asset("dashboard/css/themify-icons.css")}} rel="stylesheet">

</head>

<body>
  <div class="wrapper">
      <div class="sidebar" data-background-color="white" data-active-color="danger">

      <!--
  		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
  		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  	-->

      	<div class="sidebar-wrapper">
              <div class="logo">
                  <a href={{"/about"}} class="simple-text">
                      Bank Sampah
                  </a>
              </div>

              <ul class="nav">
                  <li class="active">
                      <a href="/about">
                          <i class="ti-panel"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>


                  <li>
                      <a href={{"/setor"}}>
                          <i class="ti-user"></i>
                          <p>Setor Sampah</p>
                      </a>
                  </li>
									<li>
											<a href={{"/transaksi"}}>
													<i class="ti-text"></i>
													<p>Record Transaksi</p>
											</a>
									</li>
                  <li>
                      <a href={{"/tarik"}}>
                          <i class="ti-view-list-alt"></i>
                          <p>Penarikan Saldo </p>
                      </a>
                  </li>
                  <li>
                      <a href={{"/daftar"}}>
                          <i class="ti-text"></i>
                          <p>Daftar Nasabah</p>
                      </a>
                  </li>
  								<li>
                      <a href={{"/nasabah"}}>
                          <i class="ti-text"></i>
                          <p>List Nasabah</p>
                      </a>
                  </li>
									<li>
                      <a href={{"/sampah"}}>
                          <i class="ti-text"></i>
                          <p>List Sampah</p>
                      </a>
                  </li>
									<li>
                      <a href={{"/sampahbaru"}}>
                          <i class="ti-text"></i>
                          <p>Daftar Sampah Baru</p>
                      </a>
                  </li>

              </ul>
      	</div>
      </div>

      <div class="main-panel">
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar bar1"></span>
                          <span class="icon-bar bar2"></span>
                          <span class="icon-bar bar3"></span>
                      </button>
                      <a class="navbar-brand" href="#">@yield('title')</a>
                  </div>




                  <div class="collapse navbar-collapse">
  									<ul class="nav navbar-nav navbar-right">
  											<!-- Authentication Links -->
  											 @if (Auth::guest())
  												 <li><a href="{{ route('login') }}">Login</a></li>
  												 <li><a href="{{ route('register') }}">Register</a></li>
  											 @else
  													<li class="dropdown">
  														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
  																	{{ Auth::user()->name }} <span class="caret"></span>
  															</a>

  															<ul class="dropdown-menu" role="menu">
  																	<li>
  																			<a href="{{ route('logout') }}"
  																					onclick="event.preventDefault();
  																									 document.getElementById('logout-form').submit();">
  																					Logout
  																			</a>

  																			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  																					{{ csrf_field() }}
  																			</form>
  																	</li>
  															</ul>
  														</li>
  														@endif
  													</ul>
  									      </div>
              </div>
          </nav>

          @yield('content')

          <footer class="footer">
              <div class="container-fluid">
                  <nav class="pull-left">
                      <ul>

                          <li>
                              <a href={{asset("http://www.creative-tim.com")}}>
                                  Creative Tim
                              </a>
                          </li>
                          <li>
                              <a href="http://blog.creative-tim.com">
                                 Blog
                              </a>
                          </li>
                          <li>
                              <a href="http://www.creative-tim.com/license">
                                  Licenses
                              </a>
                          </li>
                      </ul>
                  </nav>
                  <div class="copyright pull-right">
                      &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                  </div>
              </div>
          </footer>

      </div>
  </div>
</body>

<!--   Core JS Files   -->
<script src={{asset("dashboard/js/jquery-1.10.2.js")}} type="text/javascript"></script>
<script src={{asset("dashboard/js/bootstrap.min.js")}} type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src={{asset("dashboard/js/bootstrap-checkbox-radio.js")}}></script>

<!--  Charts Plugin -->
<script src={{asset("dashboard/js/chartist.min.js")}}></script>

<!--  Notifications Plugin    -->
<script src={{asset("dashboard/js/bootstrap-notify.js")}}></script>

<!--  Google Maps Plugin    -->
<script type={{asset("dashboard/text/javascript")}} src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src={{asset("dashboard/js/paper-dashboard.js")}}></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src={{asset("dashboard/js/demo.js")}}></script>


</html>
