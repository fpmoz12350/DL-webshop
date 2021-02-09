@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Product show :: {{ $product->name }}
                </h6>
                <div class="text-right">
                    <a class="btn btn-info" href="{{ route('products-index') }}">
                        <i class="fas fa-times">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content card pt-2 mb-2" id="myTabContent">
                        <dl class="row">
                            <dt class="col-sm-2">
                                <form action="{{ route('products-destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-times">
                                        </i>
                                    </button>
                                </form>
                            </dt>
                            <dd class="col-sm-10 text-right">
                                <a class="btn btn-primary" href="{{ route('products-edit', $product->id) }}">
                                    <i class="fas fa-edit">
                                    </i>
                                </a>
                            </dd>

                            <dt class="col-sm-2 text-right">
                                ID:
                            </dt>
                            <dd class="col-sm-10">
                                {{ $product->id }}
                            </dd>

                            <dt class="col-sm-2 text-right">
                                Name:
                            </dt>
                            <dd class="col-sm-10">
                                {{ $product->name }}
                            </dd>

                            <dt class="col-sm-2 text-right">
                                Kategorija:
                            </dt>
                            <dd class="col-sm-10">
                                {{-- {{ !empty($product->category->name) ? $product->category->name: '' }} --}}
                                {{ $product->category['name'] }}
                            </dd>

                            <dt class="col-sm-2 text-right">
                                Opis:
                            </dt>
                            <dd class="col-sm-10">
                                {{ ($product->description) }}
                            </dd>

                            <dt class="col-sm-2 text-right">
                                Stvoren:
                            </dt>
                            <dd class="col-sm-10">
                                {{ $product->created_at->format(config('custom.date.time')) }}
                            </dd>

                            <dt class="col-sm-2 text-right">
                                Uređen:
                            </dt>
                            <dd class="col-sm-10">
                                {{ $product->updated_at->format(config('custom.date.time')) }}
                            </dd>

                            @if($product->deleted_at)
                            <dt class="col-sm-2 text-right">
                                Obrisan:
                            </dt>
                            <dd class="col-sm-10">
                                {{ $product->deleted_at ? $product->deleted_at->format(config('custom.date.time')) : '' }}
                            </dd>
                            @endif

                            <dt class="col-sm-2">
                                <form action="{{ route('products-destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-times">
                                        </i>
                                    </button>
                                </form>
                            </dt>
                            <dd class="col-sm-10 text-right">
                                <a class="btn btn-primary" href="{{ route('products-edit', $product->id) }}">
                                    <i class="fas fa-edit">
                                    </i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection