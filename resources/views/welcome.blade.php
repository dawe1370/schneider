<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check In</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>


@include ('partials.navbar')

@if (session('success'))
    <div class="alert alert-success text-center" id="success-alert">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger text-center" id="danger-alert">
        {{ session('error') }}
    </div>
@endif




<div id="first" class="card text-center">
    <div class="card-header">
        <h3>Üdvözöljük / Welcome</h3>
        <span id="current_time"></span>
    </div>
    <div class="card-body">
        <h6 class="card-title">Kérjük olvassa el a biztonsági és környezetvédelmi szabályokat és regisztráljon!</h6>
        <br>
        <h6 class="card-title">Please read the "Safety & Environment instructions" and please register in!!</h6>
        <br>
        <a href="{{ route('informations') }}" class="btn btn-success">Bejelentkezés / Log in</a>
        <a href="{{ route('logout') }}" class="btn btn-danger">Kijelentkezés / Log Out</a>
    </div>
    <div class="card-footer text-muted">
        Schneider Electric Hungaria ZRT.
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#danger-alert").slideUp(500);});
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);});
</script>
</body>
</html>