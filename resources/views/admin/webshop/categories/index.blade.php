@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Izlistanje kategorija
                </h6>
                <div class="text-right">
                <a class="btn btn-warning" href="{{ route("categories-create") }}">
                        <i class="fas fa-plus-square">
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Naziv
                            </th>
                            <th scope="col">
                                Opis
                            </th>
                            <th scope="col">
                                Objavljen
                            </th>
                            <th scope="col">
                                Akcije
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th scope="row">
                                {{ $category->id }}
                            </th>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td scope="row">
                                {{ $category->description }}
                            </td>
                            <td class="text-center">
                                @if($category->published)
                                <i class="fas fa-check fa-2x text-success">
                                </i>
                                @else
                                <i class="fas fa-times fa-2x text-danger">
                                </i>
                                @endif
                            </td>
                            <td>
                            <a class="btn btn-success" href="{{ route("categories-show", $category->id) }}">
                                    <i class="fas fa-search-plus">
                                    </i>
                                </a>
                                <a class="btn btn-primary" href="{{ route("categories-edit", $category->id) }}">
                                    <i class="fas fa-edit">
                                    </i>
                                </a>
                                <div style="display:inline-block;">
                                <form action="{{ route("categories-destroy", $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                          <i class="fas fa-times">
                                          </i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection