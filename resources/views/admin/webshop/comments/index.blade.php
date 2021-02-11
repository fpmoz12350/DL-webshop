@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Izlistanje komentara
                </h6>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Ime
                            </th>
                            <th scope="col">
                                Opis
                            </th>
                            <th scope="col">
                                Naziv korisnika
                            </th>
                            <th scope="col">
                                Naziv proizvoda
                            </th>
                            <th scope="col">
                                Akcije
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <th scope="row">
                                {{ $comment->id }}
                            </th>
                            <td>
                                {{ $comment->title }}
                            </td>
                            <td>
                                {{ Str::limit($comment->description, 30) }}
                            </td>
                            <td>
                                {{ $comment->user['name'] }}
                            </td>
                            <td>
                                {{ $comment->product['name'] }}
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('comments-show', $comment->id) }}">
                                    <i class="fas fa-search-plus">
                                    </i>
                                </a>
                                <div style="display:inline-block;">
                                    <form action="{{ route('comments-destroy', $comment->id) }}" method="POST">
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