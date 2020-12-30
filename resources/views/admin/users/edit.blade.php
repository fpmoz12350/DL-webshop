@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">User edit :: {{ $user->name }}</h6>
                <div class="text-right"><a class="btn btn-info" href="{{ route('users-index') }}">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users-update', $user->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="display_name">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="display_name">E-Mail:</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">

                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @foreach($roles as $role)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $role->id }}" id="role-{{ $role->name }}" name="roles[]" {{ in_array($role->id, $user_roles) ? "checked" : "" }}>
                            <label class="form-check-label" for="role-{{ $role->name }}">
                                {{ $role->name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection