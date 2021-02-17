@extends('admin.master')

@section('content')
<div class="col-lg-12">
<h3>Narudžbe</h3>
<hr>

<ul>
    @foreach($orders as $order)
    <div class="card shadow mb-5">
        <div class="p-2">
            <li>
                <h4>Naručitelj: {{$order->user->name}} <br> Ukupna cijena (s PDV-om): {{$order->total}} KM</h4>

                <form action="{{route('toggle-deliver',$order->id)}}" method="POST" id="deliver-toggle">
                    @csrf
                    <label for="delivered">Isporučeno</label>
                    <input type="checkbox" value="1" name="delivered"  {{$order->delivered == 1 ? "checked" : "" }}>
                    <input type="submit" value="Potvrdi">
                </form>
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('orders-show', $order->id) }}">
                        <i class="fas fa-search-plus">
                        </i>
                    </a>
                    <div style="display:inline-block;">
                        <form action="{{ route('orders-destroy', $order->id) }}" method="POST">
                             @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <h5>Proizvodi</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Naziv proizvoda</th>
                        <th>Količina</th>
                        <th>Cijena</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pivot->qty}}</td>
                            <td>{{$item->pivot->total}} KM</td>
                        </tr>

                    @endforeach
                </table>
            </li>
        </div>
    </div>
    @endforeach

</ul>
</div>
@endsection