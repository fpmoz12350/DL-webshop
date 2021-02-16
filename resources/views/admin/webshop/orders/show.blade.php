@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz narudžbe
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('orders-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        <form action="{{ route('orders-destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('orders-edit', $order->id) }}">
                            <i class="fas fa-edit">
                            </i>
                        </a>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naručitelj:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->user->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Ukupno:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->total }} KM
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Dostavljena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->delivered ? 'da' : 'ne' }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Stvorena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->created_at->format(config('custom.date.time')) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uređena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->updated_at->format(config('custom.date.time')) }}
                    </dd>

                    @if($order->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Obrisana:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $order->deleted_at ? $order->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        <form action="{{ route('orders-destroy', $order->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('orders-edit', $order->id) }}">
                            <i class="fas fa-edit">
                            </i>
                        </a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection