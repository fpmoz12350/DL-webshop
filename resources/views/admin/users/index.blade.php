@extends('admin.master')

@section('content')

<div class="row pl-3 pr-3">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Izlistanje korisnika
                </h6>
                @if (Auth::user()->hasRole(['administrator']))
                    <div class="text-right">
                    <a class="btn btn-warning" href="{{ route('users-create') }}">
                            <i class="fas fa-plus-square">
                            </i>
                        </a>
                    </div>
                @endif
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
                                E-Mail
                            </th>
                            <th scope="col">
                                Akcije
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">
                                {{ $user->id }}
                            </th>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                            <a class="btn btn-success" href="{{ route('users-show', $user->id) }}">
                                    <i class="fas fa-search-plus">
                                    </i>
                                </a>
                                @if (Auth::user()->hasRole(['administrator']))
                                    <a class="btn btn-primary" href="{{ route('users-edit', $user->id) }}">
                                        <i class="fas fa-edit">
                                        </i>
                                    </a>
                                    <div style="display:inline-block;">
                                        <form action="{{ route('users-destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                            <i class="fas fa-times">
                                            </i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
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