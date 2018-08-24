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
        <p><strong>Adatkezel&eacute;si t&aacute;j&eacute;koztat&oacute;</strong></p>
<p>&nbsp;</p>
<p>A jelen dokumentum c&eacute;lja, hogy r&ouml;gz&iacute;tse a SCHNEIDER ELECTRIC HUNG&Aacute;RIA Villamoss&aacute;gi Zrt. (a tov&aacute;bbiakban: &ldquo;<strong>Adatkezelő</strong>&rdquo;) &aacute;ltal alkalmazott adatkezel&eacute;si &eacute;s adatv&eacute;delmi elveket, amelyeket az Adatkezelő mag&aacute;ra n&eacute;zve k&ouml;telező erővel ismer el.</p>
<p>Az Adatkezel&eacute;si T&aacute;j&eacute;koztat&oacute; (a tov&aacute;bbiakban: &bdquo;<strong>T&aacute;j&eacute;koztat&oacute;</strong>&rdquo;) rendelkez&eacute;seinek kialak&iacute;t&aacute;sakor az Adatkezelő k&uuml;l&ouml;n&ouml;s tekintettel vette figyelembe az Eur&oacute;pai Parlament &eacute;s a Tan&aacute;cs 2016/679 Rendelet&eacute;ben (&bdquo;&Aacute;ltal&aacute;nos Adatv&eacute;delmi Rendelet&rdquo; vagy &bdquo;GDPR&rdquo;), az inform&aacute;ci&oacute;s &ouml;nrendelkez&eacute;si jogr&oacute;l &eacute;s az inform&aacute;ci&oacute;szabads&aacute;gr&oacute;l sz&oacute;l&oacute; 2011. &eacute;vi CXII. t&ouml;rv&eacute;ny (&bdquo;Infotv.&rdquo;) &eacute;s a szem&eacute;ly- &eacute;s vagyonv&eacute;delmi, valamint a mag&aacute;nnyomoz&oacute;i tev&eacute;kenys&eacute;g szab&aacute;lyair&oacute;l sz&oacute;l&oacute; 2005. &eacute;vi CXXXIII. t&ouml;rv&eacute;ny rendelkez&eacute;seit.</p>
<p>Jelen adatkezel&eacute;si t&aacute;j&eacute;koztat&oacute; hat&aacute;lya az Adatkezelő &aacute;ltal &uuml;zemeltetett al&aacute;bbi c&iacute;meken l&eacute;vő gy&aacute;rakba (a tov&aacute;bbiakban: &bdquo;<strong>L&eacute;tes&iacute;tm&eacute;ny</strong>&rdquo;) t&ouml;rt&eacute;nő a Vend&eacute;gek bel&eacute;ptet&eacute;s&eacute;hez kapcsol&oacute;d&oacute; adatkezel&eacute;sekre terjed ki:</p>
<ul>
<li>3200 Gy&ouml;ngy&ouml;s Kők&uacute;t &uacute;t 10.</li>
<li>8900 Zalaegerszeg Hock J&aacute;nos utca 55.</li>
<li>8900 Zalaegerszeg Egerv&aacute;ri &uacute;t 9.</li>
</ul>
<p>&nbsp;</p>
<ol>
<li><strong><u>Adatkezelő el&eacute;rhetős&eacute;gei</u></strong></li>
</ol>
<p>Az Adatkezelő neve: SCHNEIDER ELECTRIC HUNG&Aacute;RIA Villamoss&aacute;gi Zrt.</p>
<p>Az Adatkezelő sz&eacute;khelye (mely egyben levelez&eacute;si c&iacute;me): 1133 Budapest V&aacute;ci &uacute;t 96-98.</p>
<p>Az Adatkezelő e-mail c&iacute;me: hu-vevoszolgalat@schneider-electric.com</p>
<p>&nbsp;</p>
<ol start="2">
<li><strong><u>Adatfeldolgoz&oacute;</u></strong></li>
</ol>
<p>Jelen T&aacute;j&eacute;koztat&oacute;ban meghat&aacute;rozott Adatfeldolgoz&oacute;k r&eacute;sz&eacute;re t&ouml;rt&eacute;nő adattov&aacute;bb&iacute;t&aacute;s az &Eacute;rintett k&uuml;l&ouml;n hozz&aacute;j&aacute;rul&aacute;sa n&eacute;lk&uuml;l v&eacute;gezhető.</p>
<p>Az Adatfeldolgoz&oacute; &ouml;n&aacute;ll&oacute; d&ouml;nt&eacute;st nem hoz, kiz&aacute;r&oacute;lag az Adatkezelővel k&ouml;t&ouml;tt szerződ&eacute;s, &eacute;s a kapott utas&iacute;t&aacute;sok szerint jogosult elj&aacute;rni.</p>
<p>Az Adatkezelő ellenőrzi az Adatfeldolgoz&oacute; munk&aacute;j&aacute;t.</p>
<p>Az Adatfeldolgoz&oacute; tov&aacute;bbi adatfeldolgoz&oacute; ig&eacute;nybe v&eacute;tel&eacute;re csak az Adatkezelő hozz&aacute;j&aacute;rul&aacute;s&aacute;val jogosult.</p>
<p>Az Adatkezelő &aacute;ltal ig&eacute;nybe vett Adatfeldolgoz&oacute;:</p>
<p>C&eacute;gn&eacute;v: <strong>&Aacute;rgus-Security Kft.</strong></p>
<p>Sz&eacute;khely: 1024 Budapest L&ouml;vőh&aacute;z u. 9.</p>
<p>Tev&eacute;kenys&eacute;g: Biztons&aacute;gi szolg&aacute;lat</p>
<p>&nbsp;</p>
<ol start="3">
<li><strong><u>Az adatkezel&eacute;s c&eacute;lja &eacute;s elvei</u></strong>
<ul>
<li>Az adatkezel&eacute;s c&eacute;lja a L&eacute;tes&iacute;tm&eacute;nybe bel&eacute;pő &eacute;s ott tart&oacute;zkod&oacute; term&eacute;szetes szem&eacute;lyekre vonatkoz&oacute;an az emberi &eacute;let, testi &eacute;ps&eacute;g v&eacute;delme, valamint a vagyonv&eacute;delem biztos&iacute;t&aacute;sa, az illet&eacute;ktelen bel&eacute;p&eacute;s megakad&aacute;lyoz&aacute;sa, ennek c&eacute;lj&aacute;b&oacute;l az &Eacute;rintettek azonos&iacute;t&aacute;sa.</li>
<li>Az Adatkezelő a Szem&eacute;lyes adatokat a j&oacute;hiszeműs&eacute;g &eacute;s a tisztess&eacute;g &eacute;s &aacute;tl&aacute;that&oacute;s&aacute;g elveinek, valamint a hat&aacute;lyos jogszab&aacute;lyok &eacute;s jelen T&aacute;j&eacute;koztat&oacute;ban rendelkez&eacute;seinek megfelelően kezeli.</li>
<li>A fenti c&eacute;l el&eacute;r&eacute;s&eacute;hez elengedhetetlen&uuml;l sz&uuml;ks&eacute;ges szem&eacute;lyes adatokat az Adatkezelő az Adatkezelő jogos &eacute;rdek&eacute;re tekintettel, &eacute;s kiz&aacute;r&oacute;lag c&eacute;lhoz k&ouml;t&ouml;tten haszn&aacute;lja fel.</li>
<li>Az Adatkezelő a szem&eacute;lyes adatokat csak a jelen T&aacute;j&eacute;koztat&oacute;ban, illetve a vonatkoz&oacute; jogszab&aacute;lyokban meghat&aacute;rozott c&eacute;lb&oacute;l kezeli. A kezelt szem&eacute;lyes adatok k&ouml;re ar&aacute;nyban &aacute;ll az adatkezel&eacute;s c&eacute;lj&aacute;val, azon nem terjeszkedhet t&uacute;l.</li>
<li>Az Adatkezelő az &aacute;ltala kezelt Szem&eacute;lyes adatokat a jelen T&aacute;j&eacute;koztat&oacute;ban meghat&aacute;rozott Adatfeldolgoz&oacute;kon k&iacute;v&uuml;l harmadik f&eacute;lnek &ndash; a k&ouml;telező adatszolg&aacute;ltat&aacute;s eset&eacute;t kiv&eacute;ve &ndash; nem adja &aacute;t.</li>
<li>Az Adatkezelő bizonyos esetekben &ndash; hivatalos b&iacute;r&oacute;s&aacute;gi, rendőrs&eacute;gi megkeres&eacute;s, jogi elj&aacute;r&aacute;s szerzői-, vagyoni- illetve egy&eacute;b jogs&eacute;rt&eacute;s vagy ezek alapos gyan&uacute;ja miatt az Adatkezelő &eacute;rdekeinek s&eacute;relme, a szolg&aacute;ltat&aacute;s biztos&iacute;t&aacute;s&aacute;nak vesz&eacute;lyeztet&eacute;se stb. &ndash; harmadik szem&eacute;lyek sz&aacute;m&aacute;ra hozz&aacute;f&eacute;rhetőv&eacute; teszi az &Eacute;rintett el&eacute;rhető Szem&eacute;lyes adatait.</li>
</ul>
</li>
<li><strong><u>Az adatkezel&eacute;s jogalapja</u></strong></li>
</ol>
<p>Az Adatkezelő a jelen T&aacute;j&eacute;koztat&oacute;ban r&eacute;szletezett Szem&eacute;lyes adatok kezel&eacute;s&eacute;t, t&aacute;rol&aacute;s&aacute;t, r&ouml;gz&iacute;t&eacute;s&eacute;t &eacute;s esetleges tov&aacute;bb&iacute;t&aacute;s&aacute;t a szem&eacute;ly- &eacute;s vagyonv&eacute;delmi, valamint a mag&aacute;nnyomoz&oacute;i tev&eacute;kenys&eacute;g szab&aacute;lyair&oacute;l sz&oacute;l&oacute; 2005. &eacute;vi CXXXIII. t&ouml;rv&eacute;ny 25.&sect; (1)-(2) bekezd&eacute;sei, tov&aacute;bb&aacute; a 26.&sect; (1) a)-c) pontjai szerint v&eacute;gzi, az Adatkezelő jogos &eacute;rdek&eacute;re tekintettel.</p>
<p>Ezen t&ouml;rv&eacute;nyi felhatalmaz&aacute;sokon t&uacute;l az Adatkezelő az adatkezel&eacute;st az Infotv.-ben meghat&aacute;rozottak tiszteletben tart&aacute;s&aacute;val folytatja.</p>
<p>&nbsp;</p>
<ol start="5">
<li><strong><u>A kezelt adatok k&ouml;re</u></strong></li>
</ol>
<p>Az Adatkezelő az al&aacute;bbi Szem&eacute;lyes adatokat kezeli a L&eacute;tes&iacute;tm&eacute;nybe t&ouml;rt&eacute;nő bel&eacute;ptet&eacute;s sor&aacute;n:</p>
<p>A vend&eacute;g neve &eacute;s azonos&iacute;t&oacute; igazolv&aacute;ny&aacute;nak sz&aacute;ma.</p>
<p>&nbsp;</p>
<ol start="6">
<li><strong><u>Az adatkezel&eacute;s időtartama</u></strong></li>
</ol>
<p>Az Adatkezelő azon &Eacute;rintettek eset&eacute;ben, akik a L&eacute;tes&iacute;tm&eacute;nybe rendszeresen bel&eacute;pnek, a bel&eacute;p&eacute;s rendszeress&eacute;g&eacute;nek fenn&aacute;ll&aacute;sa sor&aacute;n t&aacute;rolja a Szem&eacute;lyes adatokat, ezt k&ouml;vetően azokat halad&eacute;ktalanul t&ouml;rli.</p>
<p>Az egyedi bel&eacute;p&eacute;sek eset&eacute;n az Adatkezelő a Szem&eacute;lyes adatokat a bel&eacute;p&eacute;stől sz&aacute;m&iacute;tott 30 napig t&aacute;rolja, ezt k&ouml;vetően t&ouml;rli.</p>
<p>Amennyiben b&iacute;r&oacute;s&aacute;g vagy hat&oacute;s&aacute;g jogerősen elrendeli a szem&eacute;lyes adat t&ouml;rl&eacute;s&eacute;t, a t&ouml;rl&eacute;st az Adatkezelő v&eacute;grehajtja. T&ouml;rl&eacute;s helyett az Adatkezelő &ndash; az &Eacute;rintett t&aacute;j&eacute;koztat&aacute;sa mellett &ndash; korl&aacute;tozza a Szem&eacute;lyes adat felhaszn&aacute;l&aacute;s&aacute;t, ha az &Eacute;rintett ezt k&eacute;ri, vagy ha a rendelkez&eacute;s&eacute;re &aacute;ll&oacute; inform&aacute;ci&oacute;k alapj&aacute;n felt&eacute;telezhető, hogy a t&ouml;rl&eacute;s s&eacute;rten&eacute; az &Eacute;rintett jogos &eacute;rdek&eacute;t. A Szem&eacute;lyes adatot az Adatkezelő mindaddig nem t&ouml;rli, ameddig fenn&aacute;ll az az adatkezel&eacute;si c&eacute;l, amely a Szem&eacute;lyes adat t&ouml;rl&eacute;s&eacute;t kiz&aacute;rta.</p>
<p>&nbsp;</p>
<ol start="7">
<li><strong><u>Adatbiztons&aacute;gi int&eacute;zked&eacute;sek</u></strong></li>
</ol>
<p>Az Adatkezelő gondoskodik a kezelt adatok biztons&aacute;g&aacute;r&oacute;l, megteszi azokat a technikai &eacute;s szervez&eacute;si int&eacute;zked&eacute;seket, amelyek az adat- &eacute;s titokv&eacute;delmi szab&aacute;lyok &eacute;rv&eacute;nyre juttat&aacute;s&aacute;hoz sz&uuml;ks&eacute;gesek, &iacute;gy k&uuml;l&ouml;n&ouml;sen meg&oacute;vja a jogosulatlan hozz&aacute;f&eacute;r&eacute;s, megv&aacute;ltoztat&aacute;s, tov&aacute;bb&iacute;t&aacute;s, nyilv&aacute;noss&aacute;gra hozatal, t&ouml;rl&eacute;s vagy megsemmis&iacute;t&eacute;s, valamint a v&eacute;letlen megsemmis&uuml;l&eacute;s &eacute;s s&eacute;r&uuml;l&eacute;s, tov&aacute;bb&aacute; az alkalmazott technika megv&aacute;ltoz&aacute;s&aacute;b&oacute;l fakad&oacute; hozz&aacute;f&eacute;rhetetlenn&eacute; v&aacute;l&aacute;s ellen.</p>
<p>Az Adatkezelő az &aacute;ltala kezelt adatokat az ir&aacute;nyad&oacute; jogszab&aacute;lyoknak megfelelően tartja nyilv&aacute;n, biztos&iacute;tva, hogy az adatokat csak azok a munkav&aacute;llal&oacute;k, &eacute;s egy&eacute;b az Adatkezelő &eacute;rdekk&ouml;r&eacute;ben elj&aacute;r&oacute; szem&eacute;lyek (adatfeldolgoz&oacute;k) ismerhess&eacute;k meg, akiknek erre munkak&ouml;r&uuml;k, feladatuk ell&aacute;t&aacute;sa &eacute;rdek&eacute;ben sz&uuml;ks&eacute;g&uuml;k van.</p>
<p>&nbsp;</p>
<ol start="8">
<li><strong><u>Az &Eacute;rintettek jogai &eacute;s jog&eacute;rv&eacute;nyes&iacute;t&eacute;s</u></strong></li>
</ol>
<p>Az &Eacute;rintett b&aacute;rmikor ingyenesen k&eacute;relmezheti az Adatkezelőn&eacute;l a t&aacute;j&eacute;koztat&aacute;st szem&eacute;lyes adatai kezel&eacute;s&eacute;ről (&iacute;gy t&ouml;bbek k&ouml;z&ouml;tt az Adatkezelő &aacute;ltal kezelt adatair&oacute;l, azok forr&aacute;s&aacute;r&oacute;l, az adatkezel&eacute;s c&eacute;lj&aacute;r&oacute;l, jogalapj&aacute;r&oacute;l, időtartam&aacute;r&oacute;l, az Adatfeldolgoz&oacute; nev&eacute;ről, c&iacute;m&eacute;ről &eacute;s az adatkezel&eacute;ssel &ouml;sszef&uuml;ggő tev&eacute;kenys&eacute;g&eacute;ről), b&aacute;rmikor k&eacute;rheti a szem&eacute;lyes adatainak helyesb&iacute;t&eacute;s&eacute;t, valamint az adatkezel&eacute;s korl&aacute;toz&aacute;s&aacute;t, amely azonban nem &eacute;rinti a kor&aacute;bbi adatkezel&eacute;s jogszerűs&eacute;g&eacute;t. Az &Eacute;rintett az Infotv.-ben meghat&aacute;rozottak szerint tiltakozhat szem&eacute;lyes adatai kezel&eacute;se ellen. Az &Eacute;rintett t&aacute;j&eacute;koztat&aacute;s, helyesb&iacute;t&eacute;s ir&aacute;nti k&eacute;relm&eacute;t előterjesztheti &iacute;r&aacute;sban, az Adatkezelő sz&eacute;khely&eacute;re c&iacute;mzett lev&eacute;lben, vagy az Adatkezelőnek az hu-vevoszolgalat@schneider-electric.com c&iacute;mre k&uuml;ld&ouml;tt e-mailben.</p>
<p>Az &Eacute;rintett a szem&eacute;lyes adatai kezel&eacute;s&eacute;vel kapcsolatban b&aacute;rmikor megkeres&eacute;ssel fordulhat a Nemzeti Adatv&eacute;delmi Inform&aacute;ci&oacute;szabads&aacute;g Hat&oacute;s&aacute;ghoz (1530 Budapest, Pf.: 5., vagy 1125 Budapest, Szil&aacute;gyi Erzs&eacute;bet fasor 22/c, tel.: +36 (1) 391-1400, fax: +36 (1) 391-1410, e-mail: <a href="mailto:ugyfelszolgalat@naih.hu">ugyfelszolgalat@naih.hu</a>, <a href="http://www.naih.hu">www.naih.hu</a>), vagy k&ouml;zvetlen&uuml;l a b&iacute;r&oacute;s&aacute;ghoz fordulhat. A per elb&iacute;r&aacute;l&aacute;sa a t&ouml;rv&eacute;nysz&eacute;k hat&aacute;sk&ouml;r&eacute;be tartozik. A per &ndash; az &eacute;rintett v&aacute;laszt&aacute;sa szerint &ndash; az &eacute;rintett lak&oacute;helye vagy tart&oacute;zkod&aacute;si helye szerinti t&ouml;rv&eacute;nysz&eacute;k előtt is megind&iacute;that&oacute;. Az Adatkezelő k&eacute;r&eacute;sre az &Eacute;rintettet t&aacute;j&eacute;koztatja a jogorvoslat lehetős&eacute;g&eacute;ről &eacute;s eszk&ouml;zeiről.</p>
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