<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>E Library | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.partials.nav')

        @include('layouts.partials.sidebar')

        @yield('content')

        @include('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    @stack('script')
</body>
</html>
