@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz role :: {{ $role->display_name }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('roles-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        <form action="{{ route('roles-destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('roles-edit', $role->id) }}">
                            <i class="fas fa-edit">
                            </i>
                        </a>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv za prikaz:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->display_name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Opis:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->description }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Dopuštenja:
                    </dt>
                    <dd class="col-sm-10">
                        <ul>
                            @foreach($role->permissions as $permission)
                            <li>{{ $permission->display_name }}</li>
                            @endforeach
                        </ul>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Stvorena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->created_at->format(config('custom.date.time')) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uređena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->updated_at->format(config('custom.date.time')) }}
                    </dd>

                    @if($role->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Obrisana:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $role->deleted_at ? $role->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        <form action="{{ route('roles-destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('roles-edit', $role->id) }}">
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