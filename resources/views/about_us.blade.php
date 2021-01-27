@extends('webshop.template.head')
@extends('webshop.template.navbar')



<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">O nama </h1>
    <br>
    <hr>
    <br>


    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-12">
        <h2>O projektu</h2>
        <br>
        <p class="text-justify">Projekt je zamišljen kao sustav koji omogućava tvrtki proširenje poslovanja na Internet te time omogućiti potpuno iskorištavanje tržišnog potencijala. Također poslovanje putem interneta je unosnije od poslovanja u fizičkim trgovinama, budući da se ne plaća najam, i druge režije, te je potreban manji broj radnika za realiziranje istog obujma posla. U projektu namjeravamo implementirati web košaricu, pretraživanje proizvoda, ispis računa, upravljanje korisnicima i brojne druge funkcionalnosti. Gosti, odnosno posjetitelji koji nisu izvršili registraciju na sustavu imat će priliku ostaviti povratnu informaciju o njihovom iskustvu sa našom stranicom.
        <br>
        <br>

      <b>O TEHNOLOGIJAMA</b>

      <br>
      <br>

Tehnologije koje namjeravamo koristiti su PHP, točnije Laravel framework u kombinaciji sa bootstrapom kako bismo osigurali responzivno sučelje, lako za korištenje svim vrstama korisnika s obzirom na njihovu ulogu. Planirana je implementacija određenih dijelova i u JavaScriptu i AJAX-u. Podaci o korisnicima, rolama, permisijama i proizvodima će biti spremljeni u SQL bazu podataka.
<br>
<br>
     <b> MOTIVACIJA </b>

      <br>
      <br>


Na odabir i izradu baš ovog projekta nas je motiviralo to što projekt zahtjeva niz funkcionalnosti, kroz čiju implementaciju ćemo morati naučiti kako koristiti brojne tehnologije i mogućnosti koje one nude. S obzirom na pandemiju koronavirusa tvrtke koje dosada i nisu bile okrenute korištenju internetskih stranica za izlaganje svojih proizvoda sada su primorane to činiti, ali to se ne odnosi samo na njih nego i na male obrtnike te ljude koji obično svoje proizvode prodaju na tržnicama. Ta rastuća potreba za stvaranjem korisnički ugodnog i sigurnog okruženja za web trgovinu je također jedan od razloga zašto smo se odlučili izabrati ovaj projekt.
</p>
        
      </div>
    </div>

    <br>
    <div class="row">
    <div class="col-sm-5">
      </div>
    
    <div class="col-sm-3">    
    <a class="btn btn-primary btn-lg" href="https://drive.google.com/file/d/1UrYAwmVm7vzIOv6Y6Kd0VJnS0OFNDzG5/view" target="_blank" role="button">Pročitaj cijelu viziju</a>
      </div>

      <div class="col-sm-1">
      </div>

      <div class="col-sm-3">

      <a class="btn btn-primary btn-lg" href="https://github.com/fpmoz12350/DL-webshop" target="_blank" role="button">Pogledaj code na Git-u</a>
      </div>

      
    </div>

    <br>
    <hr>
    <br>

   

    <!-- Team Members -->
    <h2>O timu</h2>
    <br>
    <div class="row">
    <div class="col-sm-1">
      </div>

    
      <div class="col-sm-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://scontent.ftzl2-1.fna.fbcdn.net/v/t1.15752-9/143390213_217090176732735_4813738291357871086_n.jpg?_nc_cat=106&ccb=2&_nc_sid=ae9488&_nc_eui2=AeFqZF6Y1At4My1rv-uzf36H3yT20tU5kHjfJPbS1TmQeK9LUk8UtDg0hiylHfft_tY5jLxwZJPtdRXkkHPit8sW&_nc_ohc=Qzog9-F8o50AX8JI5vP&_nc_ht=scontent.ftzl2-1.fna&oh=ddb7b8672bea9ccb1444ed2f646f5e60&oe=603510ED" alt="">
          <div class="card-body">
            <h4 class="card-title">Dario Damjanović</h4>
            <h6 class="card-subtitle mb-2 text-muted">Backend programer</h6>
            <p class="card-text ">
            - rođen 11.07.1999. godine u Orašju.<br>               
            - pohađao Osnovnu školu fra Ilije Starčevića u Tolisi.<br>
            - srednju školu u Školskom centru fra Martina Nedića, smjer ekonomski tehničar.<br>
            - upisan fakultet 2018. godine na dislociranom studiju FPMOZ-a smjer Informatika.</p>
          </div>
          <div class="card-footer">
            <a href="#">dario.damjanovic@fpmoz.sum.ba</a>
          </div>
        </div>
      </div>

      <div class="col-sm-2">
      </div>


      <div class="col-sm-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="https://scontent.ftzl2-1.fna.fbcdn.net/v/t1.15752-9/142952345_253946579665006_3766926702800338529_n.jpg?_nc_cat=101&ccb=2&_nc_sid=ae9488&_nc_eui2=AeGV6p5blySFHERD0HGBNVTS-JZXRKgYo4_4lldEqBijj74Pb_1u0DMg4wBeJR8lyaPuso0HRYbzOrf_YXRV8JaX&_nc_ohc=hkLP0VkYmTAAX8xN5wQ&_nc_ht=scontent.ftzl2-1.fna&oh=3d9d4ab4caeafedd0e650b4b67ea5523&oe=60353417" alt="">
          <div class="card-body">
            <h4 class="card-title">Lucija Živković</h4>
            <h6 class="card-subtitle mb-2 text-muted">Frontend programer</h6>
            <p class="card-text">
            
                - rođena 04.03.1998. godine u Vinkovicima.<br>

                - pohađala Osnovnu školu Ruđera Boškovića u Donjoj Mahali.<br>

                - srednju školu u Školskom centru fra Martina Nedića, smjer opća gimnazija.<br>

                - upisana fakultet 2018. godine na dislociranom studiju FPMOZ-a smjer Informatika.<br>
            </p>
            </div>
            <div class="card-footer">
            <a href="#">lucija.zivkovic@fpmoz.sum.ba</a>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.row -->

    <br>
    <br>
    <br>
    <br>

     
    <!-- /.row -->

    </div>
     






@extends('webshop.template.foot')
@extends('webshop.template.footer')