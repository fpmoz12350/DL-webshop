@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">

  <div class="col-lg-12">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Uređivanje proizvoda :: {{ $product->name }}</h6>
        <div class="text-right"><a class="btn btn-info" href="{{ route('products-index') }}">
            <i class="fas fa-times"></i>
          </a>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('products-update', $product->id) }}">
          @csrf
          @method('PATCH')
          <div class="form-group">
            @php($column = 'name')
          <label for="{{ $column }}">Ime:</label>
          <input type="text" class="form-control" name="{{ $column }}" value="{{ old($column) ?? $product->$column }}">

            @error($column)
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            @php($column = 'category_id')
            <label for="{{ $column }}">Kategorija:</label>
          <select class="form-control" name="{{ $column }}">
              <option value="">-- Odaberi kategoriju --</option>
              @foreach($categories as $categoryAsOption)
              <option value="{{ $categoryAsOption->id }}"{{ $product->$column == $categoryAsOption->id ? ' selected' : '' }}>{{ str_repeat('- ', $categoryAsOption->depth) }}{{ $categoryAsOption->name }}</option>
              @endforeach
          </select>
         
            @error($column)
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
              <div class="form-group">
                  @php($column = 'description')
                <label for="{{ $column }}">Opis:</label>
              <textarea class="form-control" name="{{ $column }}" rows="3">{{ old($column) }}</textarea>
    
                @error($column)
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
          <div class="form-group">
            @php($column = 'price')
          <label for="{{ $column }}">Cijena:</label>
          <input type="text" class="form-control" name="{{ $column }}" value="{{ old($column) ?? $product->$column }}">

            @error($column)
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
              @php($column = 'published')
              <div class="form-check">
              <input class="form-check-input" type="checkbox" name="{{ $column }}"{{ (old($column) || $product->$column) ? ' checked' : '' }}>
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