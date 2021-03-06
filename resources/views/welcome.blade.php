@extends('layouts.app')

@section('content')
        

<!DOCTYPE html>
<html lang="en">

<head>

    @include("webshop.template.head")

</head>

<body>

  <!-- Navigation -->
  @include("webshop.template.navbar")

  <!-- Navigation -->
  @include("webshop.template.header")

  <!-- Page Content -->
  <div class="container">
  <div class="row w-50 p-3">
    
    </div>
    <h1 class="my-4">NOVOSTI</h1>

    <div class="row w-50 p-3">
    
    </div>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">Rethink fashion!</h3>
          <div class="card-body">
            <p class="card-text">Moda je za nas oduvijek bila više od odjeće - sredstvo izražavanja! Vrijeme je da pokažemo svoju ljubav prema prirodi! Klikni i saznaj više o našoj novoj eko kolekcji.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('article1') }}" class="btn btn-dark">Saznaj više</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">"NOVO NORMALNO"</h3>
          <div class="card-body">
            <p class="card-text">Nisu vam potrebni drugi kako bi se sredili. Izgledajte dobro za sebe. Pripremili smo za Vas nikad ljepšu kolekciju ležernih komada.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('article2') }}" class="btn btn-dark">Saznaj više</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h6 class="card-header">BUDIMO ODGOVORNI - KUPUJMO ONLINE!</h6>
          <div class="card-body">
            <p class="card-text">Iskoritite brojne pogodnosti koje nudimo na našem webshopu. Uživjate u kupovini iz udubnosti vlastitog doma. </p>
          </div>
          <div class="card-footer">
            <a href="{{ route('article3') }}" class="btn btn-dark">Saznaj više</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <br/>
    <br/>
    <hr/>
    <br/>
    <br/>


    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Volimo Vas i svijet u kojem živite.</h2>
        <br/>
        <p> <strong> Razvijamo politiku poslovanja kako bismo bili primjer drugima:</strong></p>
        <br/>
        <ul>
          <li>
            Svakodnevno povećavamo udio korištenja recikliranih materiala u proizvodnji.
          </li>
          <li>Skupa s Vama čuvamo naše oceane i koraljne grebene.</li>
          <li>Do 2023. godine cilj nam je koristiti 90% recikliranih materiala.</li>
          <li>Sa nama uvijek znate gdje se odjeća proizvodi - stanimo na kraj izrabljivanju dječje radne snage. </li>
        
        </ul>
        <br/>
        <p>   <strong>Promjena je u nama. Vrijeme je da mijenjamo modu. Zajedno.</strong></p>
      </div> 
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="https://remake.world/wp-content/uploads/2017/03/Banner-Images10-768x605.jpg" alt="">
      </div>
    </div>
    <div class="row w-50 p-3">
    
    </div>
    <!-- /.row -->

    <hr>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include("webshop.template.footer")

  <!-- Skripte -->
  @include("webshop.template.foot")

</body>

</html>


@endsection