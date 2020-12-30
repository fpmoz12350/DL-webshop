@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz korisnika :: {{ $user->name }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('users-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        <form action="{{ route('users-destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('users-edit', $user->id) }}">
                            <i class="fas fa-edit">
                            </i>
                        </a>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Name:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        E-Mail:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->email }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        User ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Roles
                    </dt>
                    <dd class="col-sm-10">
                        <ul>
                            @foreach($user->roles as $role)
                            <li>{{ $role->name }}</li>
                            @endforeach
                        </ul>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Created at:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->created_at }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Updated at:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->updated_at }}
                    </dd>

                    @if($user->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Deleted at:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $user->deleted_at ? $user->deleted_at : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        <form action="{{ route('users-destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('users-edit', $user->id) }}">
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