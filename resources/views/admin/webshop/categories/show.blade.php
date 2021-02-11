@extends('admin.master')

@section('content')
<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz kategorije :: {{ $category->name }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('categories-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        <form action="{{ route('categories-destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('categories-edit', $category->id) }}">
                            <i class="fas fa-edit">
                            </i>
                        </a>
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->name }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Opis:
                    </dt>
                    <dd class="col-sm-10">
                        {{ Str::words(nl2br($category->description), 10) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Objavljena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->published ? 'da' : 'ne' }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Stvorena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->created_at->format(config('custom.date.time')) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uređena:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->updated_at->format(config('custom.date.time')) }}
                    </dd>

                    @if($category->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Obrisana:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $category->deleted_at ? $category->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        <form action="{{ route('categories-destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                        <a class="btn btn-primary" href="{{ route('categories-edit', $category->id) }}">
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