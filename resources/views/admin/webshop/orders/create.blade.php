@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Stvaranje narudžbe</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('orders-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
            <form method="GET" action="{{ route('orders-store') }}">
                    <div class="form-group">
                        <label for="qty">Količina:</label>
                        <input type="text" class="form-control" name="qty">

                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @foreach($products as $product)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $product->id }}" id="product-{{ $product->name }}" name="products[]" {{ $product->id }}>
                            <label class="form-check-label" for="product-{{ $product->name }}">
                                {{ $product->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Pošalji</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection