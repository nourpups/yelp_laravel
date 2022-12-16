<div class="pdt-list-wrapper mb-3 pt-3 w-100">
        <div class="pdt-list-blk shadow border">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="card-image position-relative">
                    <img class="card-img-top custom-img-top" src="assets/img/service-img-5.jpg" alt="Card image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body p-md-0">
                    <h4 class="card-title mb-0">
                        <a href="{{ route('app.organisations.page', ['id' => $organisation->id]) }}" class="text-link">
                            {{ $organisation->legal_name}}
                        </a>
                    </h4>
                    <div class="pdt-description my-1 my-lg-2">
                        <p class="text-truncate">
                            @if(isset($organisation->other->reference))
                                <span>
                                    Ориентир: {{ $organisation->other->reference }}
                                </span>
                                <br>
                            @endif
                            @if(isset($organisation->other->website))
                                <span>
                                    Сайт: {{ $organisation->other->website }}
                                </span>
                                <br>
                            @endif
                            @if(isset($organisation->other->phone))
                                <span>
                                    Телефон: {{ $organisation->other->phone }}
                                </span>
                                <br>
                            @endif
                            @if(isset($organisation->other->email))
                                <span>
                                    Меил: {{ $organisation->other->email }}
                                </span>
                                <br>
                            @endif
                        </p>
                    </div>
                    </div>

                </div>
                <div class="col-md-2 col-7 px-md-0">
                    <div class="card-body p-md-0">
                    <div class="rating-blk d-inline-block my-2 my-lg-2">
                        <i class="fa fa-star text-rating"></i>
                        <i class="fa fa-star text-rating"></i>
                        <i class="fa fa-star text-rating"></i>
                        <i class="fa fa-star text-rating"></i>
                        <i class="fa fa-star-o text-rating"></i>
                    </div>
                    <div class="pdt-rating-btn ml-1 d-inline-block">
                        <p>5</p>
                    </div>
                    <div class="pdt-contact-btn">
                        <span class="p-2 display-5">
                            <a href="tel:1234567890">
                                <span class="lnr lnr-phone-handset"></span>
                            </a>
                        </span>
                        <span class="p-2 display-5">
                            <a href="mailto:nookx@example.com">
                                <span class="lnr lnr-inbox"></span>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="pdt-cat-tag clearfix p-2">
                @foreach($organisation->categories as $key => $cat)
                    @include('organisations.components.tag', ['name' => $cat->name])
                    @if($key >= 3)
                        @include('organisations.components.tag', ['name' => '...'])
                        @break(true)
                    @endif
                @endforeach
            </div>
        </div>
    </div>
