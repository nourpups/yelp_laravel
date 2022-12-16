@extends('layouts.admin')

@section('title', 'Adminka')

@section('content')
<!-- Dynamic Table Full -->
<div class="block block-rounded" style="margin:  4rem 0 0 0">
  <div class="block-header block-header-default">
    <h3 class="block-title">
      Organisation table <small>Full</small>
    </h3>
    <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-popin-store"> <i
        class="fa fa-plus-circle"></i> Create Organisation</button>

  </div>
  <div class="block-content block-content-full">
    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
      <thead>
        <tr>
          <th class="text-center"></th>
          <th>NAME</th>
          <th class="d-none d-sm-table-cell">DESCRIPTION</th>
          <th class="d-none d-sm-table-cell" style="width: 15%;">ACTIONS</th>
          <th class="text-center" style="width: 15%;">PROFILE</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($organisations as $org)
        <tr>
          <td class="text-center">{{ $org->id }}</td>
          <td class="fw-semibold">{{ $org->legal_name }}</td>
          <td class="d-none d-sm-table-cell">
            {{ $org->description }}


            <div class="p-3">
              <div id="category_list-{{$org->id}}">
                @foreach($org->categories as $cat)
                <a href="{{ route('organisation.index', ['cat_ids' => [...$categories_id, $cat->id]]) }}"
                  class="btn btn-primary rounded-end mb-1">
                  {{$cat->name}}
                </a>
                @endforeach
              </div>
              <div>
                <input id="add_category{{$org->id}}" type="text" class="form-control w-25 d-inline-block">
                <button organisation_id="{{ $org->id }}" class="btn btn-primary rounded-end mb-1 add_category">
                  +
                </button>
              </div>
            </div>
          </td>
          <td class="d-none d-sm-table-cell">

            <button type="button" class="btn btn-alt-primary mb-2" data-bs-toggle="modal"
              data-bs-target="#modal-popin-edit{{$org->id}}"> <i class="fa fa-pen"></i> Edit Organisation</button>

            <button type="button" class="btn btn-alt-primary mb-2" data-bs-toggle="modal"
              data-bs-target="#modal-popin-delete{{ $org->id }}"><i class="fa fa-trash"></i> Delete
              Organisation</button>

            <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
              data-bs-target="#modal-popin-attach_category{{$org->id}}"> <i class="fa fa-plus-circle"></i> Add
              category</button>

          </td>
  </div>
  </td>
  <td class="text-center">
    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
      data-bs-target="#modal-popin{{ $org->id }}" title="View Customer">
      <i class="fa fa-user"></i>
    </button>
  </td>
  </tr>
  @endforeach

  </tbody>
  </table>
</div>
</div>
<!-- END Dynamic Table Full -->
@endsection

@section('modals')
@foreach ($organisations as $org)
@include('organisations.modals.store')
@include('organisations.modals.edit',['org' => $org])
@include('organisations.modals.attach_category',['id' => $org->id, 'categories' => $categories])
@include('organisations.modals.delete',['id' => $org->id])
@endforeach
@endsection

@section('js')
  <script>
    $('.add_category').click(function(){
      let url = '{{route("organisation.api.add_category") }}';
      let url_cat = '{{ route("organisation.index")}}';
      let organisation_id = $(this).attr('organisation_id');
      let category_name = $('#add_category'+organisation_id).val()
      $.post(url,
      {
        organisation_id: organisation_id,
        category_name: category_name
      },
      function(data,status) {
        let html = '<a href="'+url_cat+'" class="btn btn-primary rounded-end mb-1 mr-1">'+category_name+'</a>';
        $('#category_list-'+organisation_id).append(html);
        $('#add_category'+organisation_id).val('');
      })
    });
  </script>
@endsection
