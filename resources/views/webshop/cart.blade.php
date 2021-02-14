@extends('webshop.template.head')
@extends('webshop.template.navbar')

<div class="container mt-3">
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <div class="card-header p-4">
                <a class="pt-2 d-inline-block" href="index.html" data-abc="true">BBBootstrap.com</a>
                <div class="float-right">
                    <h3 class="mb-0">Račun #BBB10234</h3>
                    Datum: {{ $datum }}
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h5 class="mb-3">Od:</h5>
                        <h3 class="text-dark mb-1">D&L webshop</h3>
                        <div>Email: dl-webshop@gmail.com</div>
                        <div>Broj telefona: +91 9897 989 989</div>
                    </div>
                    <div class="col-sm-6 ">
                        <h5 class="mb-3">Za:</h5>
                        <h3 class="text-dark mb-1">{{ $user->name }}</h3>
                        <div>Email: {{ $user->email }}</div>
                    </div>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Artikal</th>
                                <th>Opis</th>
                                <th class="right">Cijena</th>
                                <th class="center">Količina</th>
                                <th class="right">Ukupno</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr>
                                <td class="no">{{ $item->id }}</td>
                                <td class="text-left">{{ $item->name }}</td>
                                <td class="unit">{{ $item->price }}</td>
                                <td class="qty">
                                    <span class="input-group-btn mr-2">
                                        <button type="button" class="btn btn-primary" data-type="minus"
                                            data-field="">
                                            aa
                                        </button>
                                    </span>
                                <input type="text" name="quantity-{{ $item->id }}" class="quantity form-control input-number"
                                value="{{ $item->qty }}" min="1" max="100">
                                    <span class="quantity-display">{{ $item->qty }}</span>
                                    <span class="input-group-btn ml-2">
                                        <button type="button" class="btn btn-primary" data-type="plus"
                                            data-field="">
                                            bb
                                        </button>
                                    </span>
                                </td>
                                <td class="total">{{ number_format($item->price * $item->qty, 2, ',', ' ') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Osnovica</strong>
                                    </td>
                                    <td class="right">.. KM</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Popust (20%)</strong>
                                    </td>
                                    <td class="right">.. KM</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">PDV (17%)</strong>
                                    </td>
                                    <td class="right">.. KM</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Total</strong> </td>
                                    <td class="right">
                                        <strong class="text-dark">.. KM</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                  <div class="form-check text-right">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Slažem se sa uvjetima korištenja usluge
                    </label>
                  </div>
            </div>
            <div class="card-footer bg-white text-right">
                <p class="mb-0">
                    <button type="button" class="btn btn-primary">Potvrda narudžbe</button>
                </p>
            </div>
        </div>
    </div>
</div>
<br />
<br />

@extends('webshop.template.foot')
@extends('webshop.template.footer')

@section('javascript')
<script>
        $(document).ready(function(){
          var quantity;
          var input;
          var quantity_display;
           $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                //quantity = parseInt($('#quantity').val());
                //input = $(this).prev().prev();
                input = $(this).parent().prev().prev();
                quantity = input.val();
                quantity_display = $(this).parent().prev();
                console.log(input.val());
                quantity++;
                
                // If is not undefined
                    
                    input.val(quantity);
                    quantity-display.text(quantity);
                  
                    // Increment
                
            });
      
             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                quantity = parseInt($('#quantity').val());
                quantity--;
                
                // If is not undefined
              
                    // Increment
                    if(quantity > 0){
                    $('#quantity').val(quantity);
                    $('#quantity-display').text(quantity);
                    }
            });
        });


</script>
@endsection