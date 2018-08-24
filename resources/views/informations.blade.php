@extends('layouts.default')
@section('content')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="card text-center">
                    <div class="card-body text-left">
                        <h5 class="card-title text-center">English</h5>
                        <p class="card-text">1. Attention! You should park the car reversing, in case of evacuation!
                        </p>
                        <p class="card-text">2. Do not stay without any attendant on the production area!</p>
                        <p class="card-text">3. Please put your visitor card to visible place!</p>
                        <p class="card-text">4. Everywhere in the factory you have to wear  orange safety vest, when you enter in production area you have to wear safety shoes or „KAPLI” also!
                        </p>
                        <p class="card-text">5. Attention! forklifts, train are moving on the production area!
                        1meter minimum distance are be kept , from all the forklifts which is moving!
                        If the forklifts are lifting weight  to
                        1,5 meter high, 3meter distance to be kept !
                        </p>
                        <p class="card-text">6. Using camera and video is not allowed!</p>
                        <p class="card-text">7. Whatever injury or indisposition occurs you have to report it to your attendant immediatly!</p>
                        <p class="card-text">8. Smoking is allowed only in the dedicated area!</p>
                        <p class="card-text">9. In case of fire, you have to leave the factory and go to the checkpoint.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="form-group">
                <div class="card text-center">
                    <div class="card-body text-left">
                        <h5 class="card-title text-center">Magyar</h5>
                        <p class="card-text">1. Kötelező tolatva parkolni,
                        menekülési szempontból!</p>
                        <p class="card-text">2. Kísérő nélkül nem tartózkodhat a vállalat területén!</p>
                        <p class="card-text">3. A látogatói kártyáját jól látható helyre rakja ki!</p>
                        <p class="card-text">4. A gyár területén a narancssárga mellény viselése kötelező, a termelésbe lépéskor a munkavédelmi cipő vagy „KAPLI” használata is kötelező!
                        </p>
                        <p class="card-text">5. Fokozott figyelmet a termelésben: 
                        kiskocsik, targoncák közlekednek a területen!
                        Minden mozgásban lévő targoncától minimum 1méter távolságot kell  tartani!
                        Ha a targonca a terhet 1,5 méter magasra emeli, akkor 3 méter távolságot kell tartani ! 
                        </p>
                        <p class="card-text">6. Fényképezőgép és kamera használata tilos!</p>
                        <p class="card-text">7. Bármilyen sérülésről, rosszullétről köteles azonnal tájékoztatni kísérőjét!</p>
                        <p class="card-text">8. Dohányzás csak az arra kijelölt helyen engedélyezett!</p>
                        <p class="card-text">9. Tűzriadó esetén hagyja el a gyárat, 
                        és fáradjon a gyülekező helyre.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images\parkolás.jpg') }}"  alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 12px;">Reverse Parking /<br>Tolatva Parkolás</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('\images\safety_jacket.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 12px;">Safety Jacket And Safety Shoes /<br>Narancssárga Mellény És Munkavédelmi Cipő</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images\photosnot_allowed.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 12px;">Using camera and video is not allowed!/<br>Fényképezőgép és kamera használata tilos!</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-3">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images\dohanyzo.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 12px;">Designated Area For Smoking /<br>Dohányzásra kijelölt hely</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images\gyul_hely.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-size: 12px;">Emergency Evacuation Meeting Place /<br>Gyülekező Hely</p>
                        </div>
                    </div>
                </div>
            </div>

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