
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="{{ asset('template-shop/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('template-shop/css/shop-homepage.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('webshop.template.navbar')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">D&L webshop</h1>
        <div class="input-group mb-3">
          <form action="{{ route('search') }}" method="GET">
            <input name="word" type="text" class="form-control" placeholder="Pronađite proizvod..." aria-describedby="basic-addon2">
              <button class="btn btn-secondary">
                  Pretraži
              </button>
        </form>
        </div>
        <div class="list-group">
          <ul class="list-group">
            @foreach($categories as $category)
            @php($route = route('category', $category->id))
            @if($category->depth)
              <li class="list-group-item">
                  <a href="{{ $route }}">{!! str_repeat('&mdash; ', $category->depth) !!}{{ $category->name }}</a>
                </li>
              @else
            <li class="list-group-item font-weight-bold lead">
              <a href="{{ $route }}">{!! str_repeat('&mdash; ', $category->depth) !!}{{ $category->name }}</a>
            </li>
              @endif
            @endforeach
            </ul>
         
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/1774/4785/files/HR_desktop_banner_znizanje_1.jpg?360" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://cdn.shopify.com/s/files/1/0118/6352/files/1_55d7f313-bff6-44a4-adaa-4e126fb983f8_2048x2048.jpg?v=1552320224" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          @if(Request::has('word'))
            @foreach($rezultat as $product)
              <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-30">
                    <a href="{{ route('product', $product->id) }}"><img class="card-img-top" src="{{ asset('images/1.jpg') }}" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                      </h4>
                      <h5>{{ $product->price }} KM</h5>
                      <p class="card-text">{{ Str::limit($product->description, 30) }}</p>
                    </div>
                  </div>         
              </div>
            @endforeach
          @else
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-30">
                <a href="{{ route('product', $product->id) }}"><img class="card-img-top" src="{{ asset('images/1.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                  </h4>
                  <h5>{{ $product->price }} KM</h5>
                  <p class="card-text">{{ Str::limit($product->description, 30) }}</p>
                </div>
              </div>         
        </div>
          @endforeach
          @endif
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  

    <!----------- Footer ------------>
    <footer class="footer-bs footer-dark bg-dark">


      <div class="row w-50 p-3 fixed-bottom">
      </div>
      
      <div class="row pt-3">

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


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('template-shop/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template-shop/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
