@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Uređivanje dopuštenja :: {{ $permission->name }}</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('permissions-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('permissions-update', $permission->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="display_name">Naziv:</label>
                        <input type="text" class="form-control" name="display_name" value="{{ $permission->display_name }}">

                        @error('display_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Opis:</label>
                        <textarea class="form-control" name="description" rows="3">{{  $permission->description }}</textarea>

                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @foreach($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $role->id }}" id="role-{{ $role->name }}" name="roles[]" {{ in_array($role->id, $permission_roles) ? "checked" : "" }}>
                            <label class="form-check-label" for="role-{{ $role->name }}">
                                {{ $role->display_name }}
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