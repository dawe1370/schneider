<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Schneider Electric</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('partials.navbar')

@yield('content')

<div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 ">
          <!--Footer Bottom-->
          <p class="text-center">&copy; Schneider Electric </p>
        </div>
      </div>
    </div>
  </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>