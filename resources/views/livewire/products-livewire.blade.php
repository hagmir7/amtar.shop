<div class="py-5">
    <div class="container">
        <h4 class="text-center divider mb-4"><span class="bg-white px-2 position-relative">{{ __("Featured Products") }}</span></h4>
        <div class="row row-cols-xl-5-">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card product-card rounded-0 border-0 mt-3">
                        <div class="card-header position-relative border-0 p-0">
                            <a class="thumb-right" href="{{ route('product', $product->slug) }}">
                                <img class="defualt-image w-100 product-image" src="{{ Storage::url($product->images[0]->path) }}" alt="alt" />
                             </a>
                            <ul class="card-btn-group text-dark-lead top-left-10">
                                <li>
                                    <a class="icon-sm rounded-1 bg-white shadow-sm mb-1" href="#">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="icon-sm rounded-1 bg-white shadow-sm mb-1" href="#">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="icon-sm rounded-1 bg-white shadow-sm mb-1" href="#">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <a class="w-75 position-absolute bottom-center-10 rounded-0 btn btn-sm- btn-primary">
                                <i class="bi bi-basket me-2"> </i> &#xa0;
                                {{ __("Add To Cart") }}
                            </a>
                        </div>
                        <div class="card-body px-0-">
                            <h6 class="mb-1 title-max-45 fw-bold-">
                                <a class="text-dark" href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                            </h6>
                            <div class="smaller mb-2 text-silver-lead">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div>
                                <span class="price-18px text-primary fw-bold">{{ $product->price }} MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
