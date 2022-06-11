<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Simple Siakad | {{ $title }}</title>

    <!-- icons -->
    <link href="/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- styles -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Nav -->
    @include('partials.navbar')
    <!-- Nav -->

      <!-- Content -->
      <div class="container-sm card-container">
          <div class="row mt-3">
            <h2>{{ $title }}</h2>
            
            <!-- The Yield for the Content -->

            @yield('content')

            <!-- The Yield for the Content -->

          </div>
      </div>
      <!-- Content -->

      <!-- Footer -->
      @include('partials.footer')
      <!-- Footer -->

</body>

<!-- Sweetalert -->
@include('sweetalert::alert')
<!-- Sweetalert -->



</html>