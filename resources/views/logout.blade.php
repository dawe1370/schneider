@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="card text-center">
            <h5 class="card-header">Kijelentkezés / Log Out</h5>
            <div class="card-body">
                <form action="{{ route('checkout') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="action" value="checkout" />
                    <div class="form-group">
                        <input type="password" name="pid" value="{{ old('pid') }}" class="form-control" placeholder="Látogatói Kártya Száma* / Visitor Card Number" aria-label="Recipient's PID" maxlength="255">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Kijelentkezés / Log Out" />
                </form>
            </div>
        </div>

    </div>

    <a href="{{ route('home') }}" class="btn btn-secondary" id="back">Vissza / Back</a>
@endsection