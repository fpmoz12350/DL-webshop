@extends('webshop.template.head')
@extends('webshop.template.navbar')


<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">FAQ
        <small>Česta pitanja</small>
    </h1>


<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <b> Kako naručiti? </b>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">      
      Kako biste mogli napraviti narudžbu morate biti registrirani korisnik našeg webshopa. Prvo je potrebno odabrati željene artike i dodati ih u košaricu, a zatim potvrditi narudžbu.
       </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <b> Kako se plaća?</b>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Zasada naše narudžbe naplaćujemo isključivo pouzećem.
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <b> Tko vrši dostavu?</b>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Dostavu diljem Bosne i Hercegovine vrši dostavna služba EuroExpress - naši pouzdani partneri.
                Zajedno činimo put naših artikala do Vas lakšim i bržim!  
      </div>
    </div>

 
    <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <b> Da li je moguć povrat robe?</b>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
                Moguće je ostavariti povrat naručene robe ukoliko Vam ista ne odgovara. 
                Rok za besplatnu zamjenu je 14 radnih dana od preuzimanja narudžbe. 
                Deklaracije i etikete na artiklima pritom ne smiju biti oštećene.
      </div>
    </div>


     
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <b>Kako se vrši povrat robe?</b>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      
      Povrat, kao i dostavu vršimo preko dostavna službe EuroExpress. 
                U samom paketu koji dobijete nalaziti će se naljenica na kojoj će pisati "POVRAT".
                Naljepnicu je potrebno zalijepiti na ambalažu u kojoj se vrši povrat, te ispuniti 
                obrazac o povratu i staviti ga zajedno s artiklom u pošiljku koju vraćate. Troškove povrata 
                snosi D&L webshop.   
    </div>
    </div>

    </div>

  </div>
</div>
<br>
<br>

</div>
</div>
<!-- /.container -->


@extends('webshop.template.foot')
@extends('webshop.template.footer')