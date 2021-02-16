@extends('webshop.template.master')

@section('content')
<div class="container mt-3">
  <div class="row pt-5">
    <div class="col-lg-6 mb-5 ftco-animate">
      <a href="{{ asset('images/1.jpg') }}" class="image-popup" title="odjeca">
        <img src="{{ asset('images/1.jpg') }}" class="img-fluid" alt="odjeca">
      </a>
    </div>
    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
      <h3>{{ $product->name }}</h3>
      <p class="price"><span>Cijena: {{ $product->price }} KM</span></p>
      Opis proizvoda: {{ $product->description }}<hr/>
      <div class="row mt-4">
        <div class="w-100"></div>
        <div class="input-group col-md-6 d-flex mb-3">
          <span class="input-group-btn mr-2">
            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
              <i class="fas fa-minus"></i>
            </button>
          </span>
          <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1"
            max="100">
          <span class="input-group-btn ml-2">
            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
              <i class="fas fa-plus"></i>
            </button>
          </span>
        </div>
        <br/>
      </div>
        <div style="display:inline-block;">
          <form action="{{ route('add-to-cart') }}"
              method="GET">
              <button class="btn btn-primary" id="add-to-cart">
                Dodaj u košaricu
              </button>
          </form>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 pb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Komentari:</h4>
        </div>
        @foreach($comments as $comment=>$c)
        <div class="comment-widgets m-b-20">
          <div class="d-flex flex-row comment-row">
            <div class="p-2"><span class="round"><i class="fas fa-user-circle fa-2x"></i></span></div>
            <div class="comment-text w-100">
              <h5>{{ $c->user['name'] }}</h5>
              <div class="comment-footer"> <span
                  class="date">{{ $c->created_at->format(config('custom.date.time')) }}</span><span
                  class="action-icons"> <a href="#" data-abc="true"></a><a href="" data-abc="true"><i
                      class="fa fa-heart"></i></a> </span> </div>
              <p class="m-b-5 m-t-10">{{ $c->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <form method="GET" action="{{ route('product-comment', $product->id) }}">
        <div class="bg-light p-2">
          <div class="d-flex flex-row align-items-start"><i class="fas fa-user-circle fa-2x"></i><textarea
              class="form-control ml-1 shadow-none textarea" name="description" placeholder="{{ Auth::user() ? 'Napišite komentar ovdje..' : 'Registrirajte se kako bi mogli komentirati proizvode' }}"></textarea></div>
          <div class="mt-2 text-right">
            <button type="submit" class="btn btn-primary btn-sm shadow-none">Objavi komentar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


@section('javascript')
<script>
  $(document).ready(function(){
    var quantity;
     $('.quantity-right-plus').click(function(e){
          
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          quantity = parseInt($('#quantity').val());
          
          // If is not undefined
              
              $('#quantity').val(quantity + 1);

            
              // Increment
          
      });

       $('.quantity-left-minus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          quantity = parseInt($('#quantity').val());
          
          // If is not undefined
        
              // Increment
              if(quantity > 0){
              $('#quantity').val(quantity - 1);
              }
      });
/* 
      url = "{{ route('add-to-cart') }}";
      var token = "{{ csrf_token() }}";
      var product_id = "{{ $product->id }}";

      $('#add-to-cart').click(function(e){
          
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          quantity = parseInt($('#quantity').val());
            
          //console.log(quantity);

          if(quantity > 0){
            $.post( url, { _token: token, product_id: product_id, quantity: quantity })
            .done(function(data) {
              
              var cart_items_count = parseInt(cart_items_element.text());

              cart_items_count++;
              cart_items_element.text(cart_items_count);

            alert(data);
          })
          .fail(function() {
            alert( "error" );
          })
          }
          
      }); */
      
  });


</script>
@endsection