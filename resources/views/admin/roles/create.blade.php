@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Stvaranje uloge</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('roles-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('roles-store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naziv</label>
                        <input type="text" class="form-control" name="display_name" value="{{ old('display_name') }}">

                        @error('display_name')
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
                        @foreach($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" id="permission-{{ $permission->name }}" name="permissions[]" {{ $permission->id }}>
                            <label class="form-check-label" for="permission-{{ $permission->name }}">
                                {{ $permission->display_name }}
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