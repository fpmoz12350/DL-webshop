@extends('webshop.template.head')
@extends('webshop.template.navbar')


<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">FAQ
        <small>Česta pitanja</small>
    </h1>

   
    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">Kako naručiti?</a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="Kako naručiti?">
                <div class="card-body">
                    Kako biste mogli napraviti narudžbu morate biti registrirani korisnik našeg webshopa. 
                    prvo je potrebno odabrati željene artike i dodati ih u košaricu, a zatim potvrditi narudžbu.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">Kako se plaća?
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body">
                Zasada naše narudžbe naplaćujemo isključivo pouzećem.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingThree">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">Tko vrši dostavu?</a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="card-body">
                Dostavu diljem Bosne i Hercegovine vrši dostavna služba EuroExpress - naši pouzdani partneri.
                Zajedno činimo put naših artikala do Vas lakšim i bržim!    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="headingFour">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                        aria-expanded="false" aria-controls="collapseFour">Da li je moguć povrat robe?</a>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="card-body">
                Moguće je ostavariti povrat naručene robe ukoliko Vam ista ne odgovara. 
                Rok za besplatnu zamjenu je 14 radnih dana od preuzimanja narudžbe. 
                Deklaracije i etikete na artiklima pritom ne smiju biti oštećene.
                </div>
            </div>
        </div>

        
        <div class="card">
            <div class="card-header" role="tab" id="headingFive">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                        aria-expanded="false" aria-controls="collapseFive">Kako se vrši povrat robe?</a>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
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
<!-- /.container -->


@extends('webshop.template.foot')
@extends('webshop.template.footer')