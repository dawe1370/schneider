@extends('layouts.default')
@section('content')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">English</h5>
                        <p class="card-text">1.</p>
                        <p class="card-text">2.</p>
                        <p class="card-text">3.</p>
                        <p class="card-text">4.</p>
                        <p class="card-text">5.</p>
                        <p class="card-text">6.</p>
                        <p class="card-text">7.</p>
                        <p class="card-text">8.</p>
                        <p class="card-text">9.</p>
                        <p class="card-text">10.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Magyar</h5>
                        <p class="card-text">1.</p>
                        <p class="card-text">2</p>
                        <p class="card-text">3</p>
                        <p class="card-text">4</p>
                        <p class="card-text">5</p>
                        <p class="card-text">6</p>
                        <p class="card-text">7</p>
                        <p class="card-text">8</p>
                        <p class="card-text">9</p>
                        <p class="card-text">10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach (range(1,4) as $item)
            <div class="col-xs-12 col-md-3">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/orig_675454.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <a href="{{ route('home') }}" class="btn btn-block btn-secondary">Vissza / Back</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <a href="{{ route('login') }}" class="btn btn-block btn-info">Tovább / Continue</a>
            </div>
        </div>
    </div>
</div>
@endsection