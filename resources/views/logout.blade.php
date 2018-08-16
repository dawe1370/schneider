@extends('layouts.default')
@section('content')
    <div class="container" id="logout">
        <div class="card text-center">
            <h5 class="card-header">Kijelentkezés / Log Out</h5>
            <div class="card-body">
                <form action="{{ route('checkout') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="action" value="checkout" />
                    <div class="form-group">
                        <input type="password" name="pid" value="{{ old('pid') }}" class="form-control" placeholder="Látogatói Kártya Száma* / Visitor Card Number" aria-label="Recipient's PID" maxlength="255">
                    </div>

                    <div class="form-row text-center">
                    <div class="col-12">
                        <input type="submit" class="btn btn-danger" value="Kijelentkezés / Log Out" />
                    </div>
                    
                </form>
            </div>
        </div>

    </div>


    <div class="form-row text-center">
    <div class="col-12">
        <a href="{{ route('home') }}" class="btn btn-secondary text-center" id="back">Vissza / Back</a>
    </div>
 </div>
    
@endsection