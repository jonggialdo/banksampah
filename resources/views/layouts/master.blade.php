
<!DOCTYPE html>
<html>
@include("templates.head")
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  @include("templates.navbar")

  @include("templates.sidebar")

  <div class="content-wrapper">
  
    <section class="content">
      @yield('content')
    </section>
  </div>

  @include('templates.footer')

@include('templates.script')
</body>
</html>
