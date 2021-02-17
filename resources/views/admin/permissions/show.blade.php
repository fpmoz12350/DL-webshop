@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz dopuštenja :: {{ $permission->display_name }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('permissions-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        @if (Auth::user()->hasRole(['administrator']))
                            <form action="{{ route('permissions-destroy', $permission->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fas fa-times">
                                    </i>
                                </button>
                            </form>
                        @endif
                    </dt>
                    <dd class="col-sm-10 text-right">
                        @if (Auth::user()->hasRole(['administrator']))
                            <a class="btn btn-primary" href="{{ route('permissions-edit', $permission->id) }}">
                                <i class="fas fa-edit">
                                </i>
                            </a>
                        @endif
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv za prikaz:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->display_name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Opis:
                    </dt>
                    <dd class="col-sm-10">
                        {{ nl2br($permission->description) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uloge:
                    </dt>
                    <dd class="col-sm-10">
                        <ul>
                            @foreach($permission->roles as $role)
                            <li>{{ $role->display_name }}</li>
                            @endforeach
                        </ul>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Stvoreno:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->created_at->format(config('custom.date.time')) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uređeno:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->updated_at->format(config('custom.date.time')) }}
                    </dd>

                    @if($permission->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Obrisano:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $permission->deleted_at ? $permission->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        @if (Auth::user()->hasRole(['administrator']))
                            <form action="{{ route('permissions-destroy', $permission->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fas fa-times">
                                    </i>
                                </button>
                            </form>
                        @endif
                    </dt>
                    <dd class="col-sm-10 text-right">
                        @if (Auth::user()->hasRole(['administrator']))
                            <a class="btn btn-primary" href="{{ route('permissions-edit', $permission->id) }}">
                                <i class="fas fa-edit">
                                </i>
                            </a>
                        @endif
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>

@endsection