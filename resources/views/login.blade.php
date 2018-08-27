@extends('layouts.default')
@section('content')
<div class="container-fluid" id="login">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <div class="form-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/els_nyujt_kep_tuz.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size: 13px;">Contact People In Accident
                        <img class="segely" src="{{ asset('images/szakkepz_elsoseg_nyuljt.png') }}" alt="segely">
                         <br>Or Fire
                         <img class="segely" src="{{ asset('images/kepzett_tuz_kesz_hasz.png') }}" alt="tuz"><br> Tűz
                         <img class="segely" src="{{ asset('images/kepzett_tuz_kesz_hasz.png') }}" alt="tuz">
                         És Baleset 
                         <img class="segely" src="{{ asset('images/szakkepz_elsoseg_nyuljt.png') }}" alt="segely">
                         Esetén Értesítendő</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Balogh Erika</h5>
                    <h6 class="card-subtitle text-center">+36 (30) 277-3598</h6>
                    <p class="card-text">
                    <p class="card-text text-center" style="font-size: 13px;">Contact Person In Case Of Any Problem Or Accident /<br> Baleset Vagy Probléma Esetén Értesítendő</p><hr><p style="font-size: 13px;" class="text-center">Schneider Zala MEB 4.46 001 01 G 1/3</p>
                    </p>
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
                    <div class="text-center GDPR">
                        <a href="#" class="text-center GDPR" style="font-size: 12px;" data-toggle="modal" data-target="#gdprhun">
                                GDPR Adatkezelési nyilatkozat
                        </a>
                        <span>/</span>
                        <a href="#" class="text-center GDPR" style="font-size: 12px;" data-toggle="modal" data-target="#gdpreng">
                                GDPR Privacy Statement
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Organization Chart -->

    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-szerv-abra" role="document">
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


<!-- GDPR Modal Hun -->

<div class="modal fade bd-example-modal-lg" id="gdprhun" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-gdpr" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">GDPR Adatkezelési Nyilatkozat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="containe">
        <p><strong>Adatkezelési tájékoztató</strong></p>
<p> </p>
<p>A jelen dokumentum célja, hogy rögzítse a SCHNEIDER ELECTRIC HUNGÁRIA Villamossági Zrt. (a továbbiakban: “<strong>Adatkezelő</strong>”) által alkalmazott adatkezelési és adatvédelmi elveket, amelyeket az Adatkezelő magára nézve kötelező erővel ismer el.</p>
<p>Az Adatkezelési Tájékoztató (a továbbiakban: „<strong>Tájékoztató</strong>”) rendelkezéseinek kialakításakor az Adatkezelő különös tekintettel vette figyelembe az Európai Parlament és a Tanács 2016/679 Rendeletében („Általános Adatvédelmi Rendelet” vagy „GDPR”), az információs önrendelkezési jogról és az információszabadságról szóló 2011. évi CXII. törvény („Infotv.”) és a személy- és vagyonvédelmi, valamint a magánnyomozói tevékenység szabályairól szóló 2005. évi CXXXIII. törvény rendelkezéseit.</p>
<p>Jelen adatkezelési tájékoztató hatálya az Adatkezelő által üzemeltetett alábbi címeken lévő gyárakba (a továbbiakban: „<strong>Létesítmény</strong>”) történő a Vendégek beléptetéséhez kapcsolódó adatkezelésekre terjed ki:</p>
<ul>
<li>3200 Gyöngyös Kőkút út 10.</li>
<li>8900 Zalaegerszeg Hock János utca 55.</li>
<li>8900 Zalaegerszeg Egervári út 9.</li>
</ul>
<p> </p>
<ol>
<li><strong><u>Adatkezelő elérhetőségei</u></strong></li>
</ol>
<p>Az Adatkezelő neve: SCHNEIDER ELECTRIC HUNGÁRIA Villamossági Zrt.</p>
<p>Az Adatkezelő székhelye (mely egyben levelezési címe): 1133 Budapest Váci út 96-98.</p>
<p>Az Adatkezelő e-mail címe: hu-vevoszolgalat@schneider-electric.com</p>
<p> </p>
<ol start="2">
<li><strong><u>Adatfeldolgozó</u></strong></li>
</ol>
<p>Jelen Tájékoztatóban meghatározott Adatfeldolgozók részére történő adattovábbítás az Érintett külön hozzájárulása nélkül végezhető.</p>
<p>Az Adatfeldolgozó önálló döntést nem hoz, kizárólag az Adatkezelővel kötött szerződés, és a kapott utasítások szerint jogosult eljárni.</p>
<p>Az Adatkezelő ellenőrzi az Adatfeldolgozó munkáját.</p>
<p>Az Adatfeldolgozó további adatfeldolgozó igénybe vételére csak az Adatkezelő hozzájárulásával jogosult.</p>
<p>Az Adatkezelő által igénybe vett Adatfeldolgozó:</p>
<p>Cégnév: <strong>Árgus-Security Kft.</strong></p>
<p>Székhely: 1024 Budapest Lövőház u. 9.</p>
<p>Tevékenység: Biztonsági szolgálat</p>
<p> </p>
<ol start="3">
<li><strong><u>Az adatkezelés célja és elvei</u></strong>
<ul>
<li>Az adatkezelés célja a Létesítménybe belépő és ott tartózkodó természetes személyekre vonatkozóan az emberi élet, testi épség védelme, valamint a vagyonvédelem biztosítása, az illetéktelen belépés megakadályozása, ennek céljából az Érintettek azonosítása.</li>
<li>Az Adatkezelő a Személyes adatokat a jóhiszeműség és a tisztesség és átláthatóság elveinek, valamint a hatályos jogszabályok és jelen Tájékoztatóban rendelkezéseinek megfelelően kezeli.</li>
<li>A fenti cél eléréséhez elengedhetetlenül szükséges személyes adatokat az Adatkezelő az Adatkezelő jogos érdekére tekintettel, és kizárólag célhoz kötötten használja fel.</li>
<li>Az Adatkezelő a személyes adatokat csak a jelen Tájékoztatóban, illetve a vonatkozó jogszabályokban meghatározott célból kezeli. A kezelt személyes adatok köre arányban áll az adatkezelés céljával, azon nem terjeszkedhet túl.</li>
<li>Az Adatkezelő az általa kezelt Személyes adatokat a jelen Tájékoztatóban meghatározott Adatfeldolgozókon kívül harmadik félnek – a kötelező adatszolgáltatás esetét kivéve – nem adja át.</li>
<li>Az Adatkezelő bizonyos esetekben – hivatalos bírósági, rendőrségi megkeresés, jogi eljárás szerzői-, vagyoni- illetve egyéb jogsértés vagy ezek alapos gyanúja miatt az Adatkezelő érdekeinek sérelme, a szolgáltatás biztosításának veszélyeztetése stb. – harmadik személyek számára hozzáférhetővé teszi az Érintett elérhető Személyes adatait.</li>
</ul>
</li>
<li><strong><u>Az adatkezelés jogalapja</u></strong></li>
</ol>
<p>Az Adatkezelő a jelen Tájékoztatóban részletezett Személyes adatok kezelését, tárolását, rögzítését és esetleges továbbítását a személy- és vagyonvédelmi, valamint a magánnyomozói tevékenység szabályairól szóló 2005. évi CXXXIII. törvény 25.§ (1)-(2) bekezdései, továbbá a 26.§ (1) a)-c) pontjai szerint végzi, az Adatkezelő jogos érdekére tekintettel.</p>
<p>Ezen törvényi felhatalmazásokon túl az Adatkezelő az adatkezelést az Infotv.-ben meghatározottak tiszteletben tartásával folytatja.</p>
<p> </p>
<ol start="5">
<li><strong><u>A kezelt adatok köre</u></strong></li>
</ol>
<p>Az Adatkezelő az alábbi Személyes adatokat kezeli a Létesítménybe történő beléptetés során:</p>
<p>A vendég neve és azonosító igazolványának száma.</p>
<p> </p>
<ol start="6">
<li><strong><u>Az adatkezelés időtartama</u></strong></li>
</ol>
<p>Az Adatkezelő azon Érintettek esetében, akik a Létesítménybe rendszeresen belépnek, a belépés rendszerességének fennállása során tárolja a Személyes adatokat, ezt követően azokat haladéktalanul törli.</p>
<p>Az egyedi belépések esetén az Adatkezelő a Személyes adatokat a belépéstől számított 30 napig tárolja, ezt követően törli.</p>
<p>Amennyiben bíróság vagy hatóság jogerősen elrendeli a személyes adat törlését, a törlést az Adatkezelő végrehajtja. Törlés helyett az Adatkezelő – az Érintett tájékoztatása mellett – korlátozza a Személyes adat felhasználását, ha az Érintett ezt kéri, vagy ha a rendelkezésére álló információk alapján feltételezhető, hogy a törlés sértené az Érintett jogos érdekét. A Személyes adatot az Adatkezelő mindaddig nem törli, ameddig fennáll az az adatkezelési cél, amely a Személyes adat törlését kizárta.</p>
<p> </p>
<ol start="7">
<li><strong><u>Adatbiztonsági intézkedések</u></strong></li>
</ol>
<p>Az Adatkezelő gondoskodik a kezelt adatok biztonságáról, megteszi azokat a technikai és szervezési intézkedéseket, amelyek az adat- és titokvédelmi szabályok érvényre juttatásához szükségesek, így különösen megóvja a jogosulatlan hozzáférés, megváltoztatás, továbbítás, nyilvánosságra hozatal, törlés vagy megsemmisítés, valamint a véletlen megsemmisülés és sérülés, továbbá az alkalmazott technika megváltozásából fakadó hozzáférhetetlenné válás ellen.</p>
<p>Az Adatkezelő az általa kezelt adatokat az irányadó jogszabályoknak megfelelően tartja nyilván, biztosítva, hogy az adatokat csak azok a munkavállalók, és egyéb az Adatkezelő érdekkörében eljáró személyek (adatfeldolgozók) ismerhessék meg, akiknek erre munkakörük, feladatuk ellátása érdekében szükségük van.</p>
<p> </p>
<ol start="8">
<li><strong><u>Az Érintettek jogai és jogérvényesítés</u></strong></li>
</ol>
<p>Az Érintett bármikor ingyenesen kérelmezheti az Adatkezelőnél a tájékoztatást személyes adatai kezeléséről (így többek között az Adatkezelő által kezelt adatairól, azok forrásáról, az adatkezelés céljáról, jogalapjáról, időtartamáról, az Adatfeldolgozó nevéről, címéről és az adatkezeléssel összefüggő tevékenységéről), bármikor kérheti a személyes adatainak helyesbítését, valamint az adatkezelés korlátozását, amely azonban nem érinti a korábbi adatkezelés jogszerűségét. Az Érintett az Infotv.-ben meghatározottak szerint tiltakozhat személyes adatai kezelése ellen. Az Érintett tájékoztatás, helyesbítés iránti kérelmét előterjesztheti írásban, az Adatkezelő székhelyére címzett levélben, vagy az Adatkezelőnek az hu-vevoszolgalat@schneider-electric.com címre küldött e-mailben.</p>
<p>Az Érintett a személyes adatai kezelésével kapcsolatban bármikor megkereséssel fordulhat a Nemzeti Adatvédelmi Információszabadság Hatósághoz (1530 Budapest, Pf.: 5., vagy 1125 Budapest, Szilágyi Erzsébet fasor 22/c, tel.: +36 (1) 391-1400, fax: +36 (1) 391-1410, e-mail: <a href="mailto:ugyfelszolgalat@naih.hu">ugyfelszolgalat@naih.hu</a>, <a href="http://www.naih.hu">www.naih.hu</a>), vagy közvetlenül a bírósághoz fordulhat. A per elbírálása a törvényszék hatáskörébe tartozik. A per – az érintett választása szerint – az érintett lakóhelye vagy tartózkodási helye szerinti törvényszék előtt is megindítható. Az Adatkezelő kérésre az Érintettet tájékoztatja a jogorvoslat lehetőségéről és eszközeiről.</p>
    </div>
</div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- GDPR Modal ENG -->
<div class="modal fade bd-example-modal-lg" id="gdpreng" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-gdpr" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">GDPR Privacy Statement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <div class="containe">
            <p>Privacy Statement in English</p>
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