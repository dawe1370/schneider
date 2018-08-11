@extends('layouts.default')
@section('content')
<div class="container-fluid">
    {{--<strong>Név Megadása Kötelező! / Name Must Be Entered!</strong>--}}
    {{--<strong>Cég Megadása Kötelező! / Company Must be Entered!</strong>--}}
    {{--<strong>"Kihez Jött" Kiválasztása Kötelező! / Contact Must Be Selected!</strong>--}}

    <div class="row">
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
        <div class="col-xs-12 col-md-3">
            <div class="form-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/orig_675454.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal">
                            Szervezeti Ábra / <br> Organization Chart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <h5 class="card-header">Bejelentkezés / Log In</h5>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('checkin') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="action" value="checkin" />
                        <p class="card-text">Név* / Name*</p>
                        <div class="input-group mb-3">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Név / Name" aria-label="Recipient's username" maxlength="255">
                        </div>
                        <p class="card-text">Sz.ig. szám* / PID*</p>
                        <div class="form-group">
                            <input type="password" name="pid" value="{{ old('pid') }}" class="form-control" placeholder="Sz.ig. szám / Personal ID" aria-label="Recipient's PID" maxlength="255">
                        </div>
                        <p class="card-text">Cég / Company</p>
                        <div class="input-group mb-3">
                            <input type="text" name="company" value="{{ old('company') }}" class="form-control" placeholder="Cég / Company" aria-label="Recipient's username" maxlength="255">
                        </div>
                        <p class="card-text">Kihez jött* / Contact*</p>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="contact_name">
                                <option value="">Válasszon / Please select</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->name }}" @if (old('contact_name') === $user->name) selected @endif >{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <label class="input-group-text">Lista / List</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success">
                                Elolvastam és tudomásul veszem az előírásokat / <br>
                                Confirm having read the safety instructions
                            </button>
                        </div>
                    </form>
                    <a href="{{ route('informations') }}" class="btn btn-block btn-secondary">
                        Vissza / Back
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection