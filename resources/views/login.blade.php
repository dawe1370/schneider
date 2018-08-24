@extends('layouts.default')
@section('content')
<div class="container-fluid" id="login">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <div class="form-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/orig_675454.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" style="font-size: 13px;">Schneider Zala MEB 4.46 001 01 G 1/3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="form-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/segelyhivoszamok.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal">
                            Szervezeti Ábra / <br> Organization Chart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <h5 class="card-header text-center">Bejelentkezés / Log In</h5>
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
                        <p class="card-text">Látogatói Kártya Száma* / Visitor Card Number*</p>
                        <div class="form-group">
                            <input type="password" name="pid" value="{{ old('pid') }}" class="form-control" placeholder="Látogatói Kártya Száma* / Visitor Card Number" aria-label="Recipient's PID" maxlength="255">
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
                                <span id="accept-btn">Elolvastam és tudomásul veszem az előírásokat /<br>
                                Confirm having read the safety instructions</span>
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



    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Szervezeti Ábra / Organization Chart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="containe">
            <img src="{{ asset('images/szerv_abra.png') }}" id="imagepreview" style="width: 1230px;">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
@endsection