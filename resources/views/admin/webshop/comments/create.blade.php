@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Stvaranje kategorije</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('comments-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('comments-store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="description">Opis:</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>

                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @php($column = 'product_id')
                        <label for="{{ $column }}">Proizvod:</label>
                      <select class="form-control" name="{{ $column }}">
                          <option value="">-- Odaberi proizvod --</option>
                          @foreach($products as $productAsOption)
                          <option value="{{ $productAsOption->id }}"{{ $productAsOption->id ? ' selected' : '' }}>{{ $productAsOption->name }}</option>
                          @endforeach
                      </select>
                     
                        @error($column)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                    <button type="submit" class="btn btn-primary">Pošalji</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection