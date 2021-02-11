@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Prikaz komentara :: {{ $comment->title }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('comments-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-2">
                        <form action="{{ route('comments-destroy', $comment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                    </dd>

                    <dt class="col-sm-2 text-right">
                        ID:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->id }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Ime:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->title }}
                    </dd>
                    
                    <dt class="col-sm-2 text-right">
                        Naziv korisnika:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->user['name'] }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Naziv proizvoda:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->product['name'] }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Opis:
                    </dt>
                    <dd class="col-sm-10">
                        {{ nl2br($comment->description) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Stvoren:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->created_at->format(config('custom.date.time')) }}
                    </dd>

                    <dt class="col-sm-2 text-right">
                        Uređen:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->updated_at ? $comment->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>

                    @if($comment->deleted_at)
                    <dt class="col-sm-2 text-right">
                        Obrisan:
                    </dt>
                    <dd class="col-sm-10">
                        {{ $comment->deleted_at ? $comment->deleted_at->format(config('custom.date.time')) : '' }}
                    </dd>
                    @endif

                    <dt class="col-sm-2">
                        <form action="{{ route('comments-destroy', $comment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fas fa-times">
                                </i>
                            </button>
                        </form>
                    </dt>
                    <dd class="col-sm-10 text-right">
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    </div>

</div>
@endsection