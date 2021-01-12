@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Stvaranje kategorije</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('categories-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('categories-store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naziv</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Opis:</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>

                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @php($column = 'published')
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="{{ $column }}"{{-- {{ old($column) ? ' checked' : '' }} --}} checked>
                            <label class="form-check-label" for="{{ $column }}">
                                {{ ucfirst($column) }}
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