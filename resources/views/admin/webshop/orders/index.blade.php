@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Izlistanje narudžbi
                </h6>
                <div class="text-right">
                <a class="btn btn-warning" href="{{ route("orders-create") }}">
                        <i class="fas fa-plus-square">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Korisnik
                            </th>
                            <th scope="col">
                                Količina
                            </th>
                            <th scope="col">
                                Cijena
                            </th>
                            <th scope="col">
                                Ukupno
                            </th>
                            <th scope="col">
                                Dostavljena
                            </th>
                            <th scope="col">
                                Akcije
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <th scope="row">
                                {{ $order->id }}
                            </th>
                            <td>
                                {{ $order->user->name }}
                            </td>
                            <td>
                                {{ $order->qty }}
                            </td>
                            <td>
                                {{ $order->price }}
                            </td>
                            <td>
                                {{ $order->total }}
                            </td>
                            <td>
                                @if($order->delivered)
                                <i class="fas fa-check fa-2x text-success">
                                </i>
                                @else
                                <i class="fas fa-times fa-2x text-danger">
                                </i>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('orders-show', $order->id) }}">
                                    <i class="fas fa-search-plus">
                                    </i>
                                </a>
                                <a class="btn btn-primary"
                                    href="{{ route('orders-edit', $order->id) }}">
                                    <i class="fas fa-edit">
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection