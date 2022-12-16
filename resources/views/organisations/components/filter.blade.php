
<!-- Filter Area -->
<aside class="pdt-filter-blk card mb-4 shadow">
<div class="card-header bg-white p-4">
    <h3 class="card-title mb-0 d-inline-block">Фильтер</h3>
    <a href="javascript:;" class="d-inline-block float-right text-grey"><i class="lnr lnr-funnel display-5"></i></a>
</div>
<div id="accordion" class="accordion">
    <div class="card mb-0 border-0">
        <div class="card-header bg-white border-bottom-0 p-3 mb-0">
            <a href="#collapseOne" class="card-title text-dark d-inline-block mb-0 w-100" data-toggle="collapse">
            <h5 class="d-inline">Categories</h5>
            </a>
        </div>
        <div id="collapseOne" class="card-body pt-0 pb-3 collapse show" data-parent="#accordion">
            @foreach($categories as $value)
            <div class="custom-control custom-radio mb-2">
                <input
                    type="checkbox"
                    class="custom-control-input"
                    id="{{$value->id}}category_laravel"
                    name="cat-filter"
                    value="{{ $value->id }}"
                >
                <label class="custom-control-label pl-3" for="{{$value->id}}category_laravel">
                    {{ $value->name }}
                </label>
            </div>
            @endforeach
        </div>
        <div class="card-header bg-white my-0 p-0 border-bottom-0">
            <a href="#collapseFour" class="card-title collapsed text-dark border border-bottom-0 d-inline-block p-3 mb-0 w-100" data-toggle="collapse">
            <h5 class="d-inline"> Sort by</h5>
            </a>
        </div>
        <div id="collapseFour" class="card-body collapse border border-0 pt-0 pb-3" data-parent="#accordion">
            <div class="custom-control custom-radio mb-2">
            <input type="radio" class="custom-control-input" id="sort-ltoh" name="cat-sort" value="cat-sort">
            <label class="custom-control-label pl-3" for="sort-ltoh">Low to High</label>
            </div>
            <div class="custom-control custom-radio mb-0">
            <input type="radio" class="custom-control-input" id="sort-htol" name="cat-sort" value="cat-sort">
            <label class="custom-control-label pl-3" for="sort-htol">High to Low</label>
            </div>
        </div>
    </div>
</div>
</aside>
<!-- /Filter Area -->
