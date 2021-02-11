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
                                Preuredi
                            </th>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Naziv
                            </th>
                            <th scope="col">
                                Objavljena
                            </th>
                            <th scope="col">
                                Akcije
                            </th>
                        </tr>
                    </thead>
                    <tbody class="row_drag">
                        @foreach($categories as $category)
                        <tr id="category_{{ $category->id }}">
                            <td scope="row">
                                <i class="fa fa-sort"></i>
                            </td>
                            <th scope="row">
                                {{ $category->id }}
                            </th>
                            <td>
                                {{ str_repeat('- ', $category->depth) }}{{ $category->name }}
                            <a href="{{ route('categories-filter', $category->id) }}"><i class="fa fa-list-alt" aria-hidden="true"></i>
                                </a>
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
                                <a class="btn btn-success"
                                    href="{{ route('categories-show', $category->id) }}">
                                    <i class="fas fa-search-plus">
                                    </i>
                                </a>
                                <a class="btn btn-primary"
                                    href="{{ route('categories-edit', $category->id) }}">
                                    <i class="fas fa-edit">
                                    </i>
                                </a>
                                <div style="display:inline-block;">
                                    <form action="{{ route('categories-destroy', $category->id) }}"
                                        method="POST">
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

@section('javascript')
{{-- @parent() --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">
    // $(".row_drag>tr").css("background-color", "blue");
    $(".fa-sort").mousedown(function() {
    console.log("Handler for .mousedown() called.");
    $(".row_drag").sortable({
        delay: 100,

        stop: function(event, ui) {
            var selectedRow = new Array();
            var id;
            // var thisId = $(this).attr("id");
            var thisId = ui.item.attr('id').replace("category_", "");
            $(".row_drag>tr").each(function() {
                id = $(this).attr("id");
                selectedRow.push(id.replace("category_", ""));
            });
            console.log(selectedRow);
            // prva varijabla pripada ajaxu a druga nosi vrijednost na server
            // _token: csrf_token()
            $.get( "{{ route('categories-reorder') }}", { categories: selectedRow, thisId: thisId } )
                .done(function( data ) {
                    console.log( data );
            })  
                .fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
    });
        }
    });
});
</script>
@endsection