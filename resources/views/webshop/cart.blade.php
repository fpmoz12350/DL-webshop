@extends('webshop.template.master')

@section('content')
<div class="container mt-3">
    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
        <div class="card">
            <div class="card-header p-4">
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
                                <th>Ime</th>
                                <th class="right">Cijena</th>
                                <th class="center">Količina</th>
                                <th class="right">Ukloni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $cartItem)
                            <tr>
                                <td>{{$cartItem->name}}</td>
                                <td>{{$cartItem->price}} KM</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.update', $cartItem->rowId) }}">
                                        @csrf
                                        @method('PUT')
                                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                                        <button type="submit" class="btn btn-primary btn-sm mb-1">
                                            <i class="fas fa-check">
                                            </i>
                                        </button>
                                </td>
                                <td>
                                    </form>
                                    <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-times">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>
                    <div class="col-lg-6 col-sm-8 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Osnovica</strong>
                                    </td>
                                    <td class="right">{{ number_format($subtotal, 2, ',', ' ') }} KM</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">PDV ({{ $tax_percent }}%)</strong>
                                    </td>
                                    <td class="right">{{ number_format($tax, 2, ',', ' ') }} KM</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong class="text-dark">Ukupno</strong> </td>
                                    <td class="right">
                                        <strong class="text-dark">{{ number_format($total, 2, ',', ' ') }} KM</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-check text-right">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked
                        disabled>
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Slažem se sa uvjetima korištenja usluge
                    </label>
                </div>
            </div>
            <div class="card-footer bg-white text-right">
                <p class="mb-0">
                    <a href="{{ route('store-order') }}"><button type="button" class="btn btn-primary">Potvrda narudžbe</button></a>
                </p>
            </div>
        </div>
    </div>
</div>
<br />
<br />
@endsection