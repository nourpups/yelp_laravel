@extends('layouts.app')

@section('content')
<!-- Header Banner Section -->
<section class="slider-wrapper py-5">
  <div class="container">
     <div class="row">
        <div class="col-12 text-center">
           <div class="inner-banner-heading py-0 py-md-3 py-lg-5">
              <h1 class="text-white">Организации</h1>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- /Header Banner Section -->
<!-- Bread crumb -->
<div class="breadcrumb-wrapper bg-theme py-2">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="custom-breadcrumb">
              <ol class="breadcrumb no-bg-color p-0 m-0">
                 <li class="breadcrumb-item d-inline-block"><a href="{{ route('landing') }}" class="text-theme-secondary">Главное</a></li>
                 <li class="breadcrumb-item d-inline-block active">Организации</li>
              </ol>
           </div>
        </div>
     </div>
  </div>
</div>
<!-- /Bread crumb -->

<!-- Product Grid -->
<section class="pdt-filter-wrapper  py-5">
  <div class="container">
     <div class="row">
        <div class="col-lg-4 col-md-12">
           @include('organisations.components.filter')
        </div>
        <div class="col-lg-8">
           <div class="row">
              @foreach($organisations as $organisation)
                 @include('organisations.row_card', ['organisation' => $organisation])
              @endforeach
              {{ $organisations->links('vendor.pagination.bootstrap-4') }}
           </div>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- Product Grid -->
@endsection

@section('js')
<script lang="javascript">
  $(document).ready(function(){
     $('input[type="checkbox"]').change($.debounce(250, function(e) {
        let cat_ids = $('.custom-control-input:checked').each(() => {
           console.log($(this).val());
        });

     }));
  });
</script>
@endsection
