@extends('layouts.base')


@section('content')
<div class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="carousel-horizontal-container">
              <div class="single-product-carousel-horizontal border border-silver">

                @foreach ($product->images as $image)
                    <div class="slider-zoom"><img src="{{ Storage::url($image->path) }}" alt="" /></div>
                @endforeach
              </div>
              <div class="d-flex silder-horizontal-nav mt-2">
                @foreach ($product->images as $image)
                <div class="slider-item border border-silver"><img class="img-fluid" src="{{ Storage::url($image->path) }}" alt="" /></div>
                @endforeach

              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div><a class="d-block mb-1 text-muted small" href="#">{{ $product->category->name }}</a>
              <h4 class="mb-2">{{ $product->name }}</h4>
              <div class="small- d-flex align-items-center gap-2">
                <div class="small text-silver-lead">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <span class="small text-gray"> (3 {{ __("customer reviews") }})</span>
              </div>
              <div class="mt-2"> <span class="fs-5 text-muted text-decoration-line-through me-2"></span><span class="fs-3 text-dark fw-bold">{{ $product->price }} MAD</span></div>
              <p class="text-gray my-3">{{ $product->description }}</p>
              <ul class="small">
                {{-- <li class="mb-1"> <span class="me-2 text-muted">SUK:</span><span class="text-dark fw-bold">NTB7SDVX44</span></li> --}}
                <li class="mb-1"> <span class="me-2 text-muted">Category:</span><span class="text-dark fw-bold">{{ $product->category->name }}</span></li>
                {{-- <li class="mb-1"> <span class="me-2 text-muted">Tags:</span><a class="text-dark fw-bold" href="#">Camera ,</a><a class="text-dark fw-bold" href="#">Video</a></li> --}}
              </ul>
              @livewire('add-button', ['product' => $product], key($product->id))
              <div class="d-flex-align-items-center mt-4">
                    <span class="me-2 text-muted">{{ __("Share") }} </span>
                    <a class="social-x-icon rounded-circle shadow-sm border me-2" href="#"> <i class="fa-brands fa-facebook-f"></i></a>
                    <a class="social-x-icon rounded-circle shadow-sm border me-2" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="social-x-icon rounded-circle shadow-sm border me-2" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a class="social-x-icon rounded-circle shadow-sm border me-2" href="#"><i class="fa-solid fa-envelope"> </i></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-4">
      <div class="container">
        <div class="row">
          <ul class="nav nav-pills- justify-content-center text-dark-lead border-bottom">
            <li class="nav-item"><a class="fs-5 px-4 rounded-0 hover:bottom-line nav-link active" id="description-tab" href="#" data-bs-toggle="tab" data-bs-target="#description" role="tab" aria-controls="description" aria-selected="true">{{ __("About Product") }}</a></li>
            {{-- <li class="nav-item"><a class="fs-5 px-4 rounded-0 hover:bottom-line nav-link" id="additional-info-tab" href="#" data-bs-toggle="tab" data-bs-target="#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional information</a></li> --}}
            {{-- <li class="nav-item"><a class="fs-5 px-4 rounded-0 hover:bottom-line nav-link" id="reviews-tab" href="#" data-bs-toggle="tab" data-bs-target="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</a></li> --}}
          </ul>
          <div class="tab-content">
            <div class="pt-4 tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="">
              {!! $product->body !!}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
