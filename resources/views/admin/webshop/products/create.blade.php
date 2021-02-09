@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Stvaranje proizvoda</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('products-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('products-store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Ime proizvoda</label>
                        <input type="text" class="form-control" name="name" value="{{ old('display_name') }}">

                        @error('display_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @php($column = 'category_id')
                        <label for="{{ $column }}">{{ ucwords(str_replace(['_id', '_'], ['', ' '], $column)) }}:</label>
                        <select class="form-control" name="{{ $column }}">
                          <option value="">-- Odaberi kategoriju --</option>
                          @foreach($categories as $categoryAsOption)
                          <option value="{{ $categoryAsOption->id }}">{{ str_repeat('- ', $categoryAsOption->depth) }}{{ $categoryAsOption->name }}</option>
                          @endforeach
                      </select>
                     
                        @error($column)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Cijena:</label>
                        <textarea class="form-control" name="price" rows="3"></textarea>

                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @php($column = 'description')
                      <label for="{{ $column }}">Opis:</label>
                    <textarea class="form-control" name="description" rows="3">{{ old($column) }}</textarea>
          
                      @error($column)
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        @php($column = 'published')
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="{{ $column }}"{{ old($column) ? ' checked' : '' }}>
                            <label class="form-check-label" for="{{ $column }}">
                                objavljen
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Pošalji</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection