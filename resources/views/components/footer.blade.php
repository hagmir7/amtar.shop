    <footer>
      <div class="bg-light pt-5 pb-4">
        <div class="container pt-3">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-widget">
                <h5 class="mb-4">{{ __("About Us") }}</h5>
                <p class="mb-3 small">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar
                  neque. Nulla
                  finibus lobortis pulvinar.
                </p>
                <ul>
                  <li class="mb-3"><i class="text-primary me-1 bi bi-geo-alt"></i> Anas 3 Fes</li>
                  <li class="mb-3"><i class="text-primary me-1 bi bi-envelope"></i> contact@amtar.shop</li>
                  <li class="mb-3"><i class="text-primary me-1 bi bi-telephone-inbound"></i> +212 648382674</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-widget">
                <h5 class="mb-4">{{ __("More") }}</h5>
                <ul class="footer-list text-dark">
                  <li><a href="#">{{ __("About Us") }}</a></li>
                  <li><a href="#">{{ __("Terms Conditions") }}</a></li>
                  <li><a href="#">{{ __("Contact Us") }}</a></li>
                  <li><a href="#">{{ __("Support Center") }}</a></li>
                  <li><a href="#">{{ __("Press Info") }}</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                <h5 class="mb-4">{{ __("Popular") }}</h5>
                <ul class="footer-list text-dark">
                  <li><a href="single-product.html">Blue Traingin Shoes</a></li>
                  <li><a href="single-product.html">Popo Smart Phone P56</a></li>
                  <li><a href="single-product.html">Smart Watch A355S</a></li>
                  <li><a href="single-product.html">White Schoolbag</a></li>
                  <li><a href="single-product.html">Blue Traingin Shoes</a></li>
                </ul>
              </div>
            </div>
            @livewire('subscribe')
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <p class="text-gray">&copy; 2023 {{ __("Amtar") }}. {{ __("All Rights Reserved") }}</p>
            <ul class="d-flex gap-2">
              <li><img class="w-75" src="https://leeucode.com/demo/matgar/assets/images/mastercard.svg" alt=""/></li>
              <li><img class="w-75" src="https://leeucode.com/demo/matgar/assets/images/visa.svg" alt=""/></li>
              <li><img class="w-75" src="https://leeucode.com/demo/matgar/assets/images/paypal.svg" alt=""/></li>
              <li><img src="https://leeucode.com/demo/matgar/assets/images/skrill.svg" alt=""/></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
