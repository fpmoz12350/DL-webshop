@extends('webshop.template.head')
@extends('webshop.template.navbar')

@section('content')
  <div class="container mt-5">
    <div class="row pt-5">
      <div class="col-lg-6 mb-5 ftco-animate">
        <a href="{{ asset('images/1.jpg') }}" class="image-popup" title="komp">
          <img src="{{ asset('images/1.jpg') }}" class="img-fluid" alt="komp">
        </a>
      </div>
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h3>{{ $product->name }}</h3>
        <p class="price"><span>{{ $product->price }} KM</span></p>
        {{ $product->description }}
        <div class="row mt-4">
          <div class="w-100"></div>
          <div class="input-group col-md-6 d-flex mb-3">
            <span class="input-group-btn mr-2">
              <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                <i class="ion-ios-remove"></i>
              </button>
            </span>
            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1"
              max="100">
            <span class="input-group-btn ml-2">
              <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                <i class="ion-ios-add"></i>
              </button>
            </span>
          </div>
        </div>
        <p><a href="{{ route('add-to-cart') }}" class="btn btn-primary" id="add-to-cart">Dodaj u košaricu</a></p>
      </div>
    </div>
  </div>

@extends('webshop.template.foot')

    <!----------- Footer ------------>
    <footer class="footer-bs footer-dark bg-dark fixed-bottom">


      <div class="row w-50 p-3">
      
      </div>
      
      <div class="row">

      <div class="col-sm-1">
      </div>
  
  
      <div class="col-sm">
      <div class="nav-item">
              <a class="nav-link text-light" href="{{ route('terms') }}">Uvjeti korištenja</a>
      </div>
      </div>
      <div class="col-sm">
      
      <div class="nav-item">
              <a class="nav-link text-light" a href="{{ route('faq') }}">FAQ</a>
  
      </div>
      </div>
      <div class="col-sm">
      <div class="nav-item">
              <a class="nav-link text-light" a href="{{ route('about_us') }}">O nama</a>
      </div>
      </div>
      <div class="col-sm">
      <div class="nav-item">
              <a class="nav-link text-light" href="{{ route('contact') }}">Kontakt</a>
      </div>
      </div>
    </div>
    
  
  
    <div class="row ">
    <hr/>
  
    <div class="col-sm"  >
    <section style="text-align:center; margin:50px auto; color:white"><p>© Dizajnirali Dario & Lucija </a></p></section>
      </div>
  
   
      </div>
  
      </footer>
    
  
  </div>