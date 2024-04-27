<div>
    <div class="hidden cart-ovelay"></div>
    <div class="hidden- cart-offcanvas bg-white h-100 shadow-sm" style="width:320px">
      <div class="p-4">
        <div class="pb-3 border-bottom d-flex align-items-center justify-content-between">
          <p class="text-uppercase fs-6 fw-bold m-0">{{ __("Shopping Cart") }}</p>
          <a class="close-cart-offcanvas text-muted small" href="">{{ __("Close") }}<i class="bi bi-x"></i></a>
        </div>
        <div class="cart-body">
          <div class="border-bottom border-silver py-3 d-flex align-items-center gap-3"><a class="d-block" href="single-product.html" style="max-width: 80px;"><img class="border border-silver" src="https://leeucode.com/demo/matgar/assets/images/shop/9.jpg" alt="Popo Smart Phone P56"/></a>
            <div> <a class="d-block small fw-bold text-dark mb-1" href="single-product.html">Popo Smart Phone P56</a><span class="text-muted small"> <span class="me-1">1</span>x<span class="ms-1">$950.00</span></span></div>
          </div>
          <div class="border-bottom border-silver py-3 d-flex align-items-center gap-3"><a class="d-block" href="single-product.html" style="max-width: 80px;"><img class="border border-silver" src="https://leeucode.com/demo/matgar/assets/images/shop/2-2.jpg" alt="Alarm Clock With Lamp"/></a>
            <div> <a class="d-block small fw-bold text-dark mb-1" href="single-product.html">Alarm Clock With Lamp</a><span class="text-muted small"> <span class="me-1">1</span>x<span class="ms-1">$45.00</span></span></div>
          </div>
          <div class="border-bottom border-silver py-3 d-flex align-items-center gap-3"><a class="d-block" href="single-product.html" style="max-width: 80px;"><img class="border border-silver" src="https://leeucode.com/demo/matgar/assets/images/shop/11-2.jpg" alt="Smart Watch A355S"/></a>
            <div> <a class="d-block small fw-bold text-dark mb-1" href="single-product.html">Smart Watch A355S</a><span class="text-muted small"> <span class="me-1">1</span>x<span class="ms-1">$450.00</span></span></div>
          </div>
        </div>
        <div class="cart-footer">
          <div class="py-3 d-flex algin-items-center justify-content-between"> <span class="fs-6 fw-bold text-dark">SubTotal:</span><span class="fs-6 fw-bold">$1,445.00</span></div>
          <div class="d-flex gap-3 py-3"><a class="btn btn-outline-dark rounded-0 fw-bold w-50" href="cart.html">View Cart </a><a class="btn btn-primary rounded-0 fw-bold w-50" href="checkout.html">Checkout</a></div>
        </div>
      </div>
    </div>
    {{-- <div class="recent-purchase bottom gap-3 p-3 border border-silver shadow-sm"><a class="d-block" href="#"> <img class="border border-silver" src="https://leeucode.com/demo/matgar/assets/images/shop/9.jpg" alt=""/></a>
      <div class="d-flex flex-column justify-content-around">
        <div>
          <p class="text-muted fw-bold- small">Someone Purchased</p><a class="d-block text-dark fw-bold-" href="#"> Popo Smart Phone P56</a>
        </div><span class="smaller text-muted">10 Minutes ago</span>
      </div><span class="purchase-close"><i class="bi bi-x"></i></span>
    </div> --}}
    <div class="mobile-footer shadow-sm py-2 d-block d-lg-none">
      <ul class="nav align-items-center justify-content-between px-2">
        <li class="nav-item"> <a class="text-dark nav-link px-1 d-flex flex-column align-items-center" href="index.html"><i class="fs-4 bi bi-house"></i><span class="smaller text-capitalize">Home</span></a></li>
        <li class="nav-item"> <a class="text-dark nav-link px-1 d-flex flex-column align-items-center" href="shop-full-width.html"><i class="fs-4 bi bi-bookmarks"></i><span class="smaller text-capitalize">Categories</span></a></li>
        <li class="nav-item"> <a class="text-dark nav-link px-1 d-flex flex-column align-items-center" href="cart.html"><i class="fs-4 bi bi-bag"></i><span class="smaller text-capitalize">Cart</span></a></li>
        <li class="nav-item"> <a class="text-dark nav-link px-1 d-flex flex-column align-items-center" href="my-account.html"><i class="fs-4 bi bi-person-circle"></i><span class="smaller text-capitalize">Account</span></a></li>
        <li class="nav-item"> <a class="text-dark nav-link px-1 d-flex flex-column align-items-center" href="#"><i class="fs-4 bi bi-search"></i><span class="small text-capitalize">Search</span></a></li>
      </ul>
    </div>
    <div class="offcanvas offcanvas-start offcanvas-295" id="offcanvasScrolling" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header offcanvas-border-light d-flex justify-content-between">
        <div class="offcanvas-title col-5" id="offcanvasScrollingLabel"> <a class="logo" href="#"><img class="max-width-180-" src="https://leeucode.com/demo/matgar/assets/images/logo.png" alt=""/></a></div>
        <button class="btn btn-light btn-sm rounded-circle x-icon small d-flex align-items-center justify-content-center" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x"></i></button>
      </div>
      <div class="offcanvas-body">
        <div class="border input-group group-circle mx-auto w-100">
          <input class="form-control border-0" type="text" placeholder="Search"/>
          <button class="btn px-3" type="submit"><i class="bi bi-search"></i></button>
        </div>
        <ul class="mobile-menu">
          <li class="nav-item"><a class="nav-link" href="#"> <span> <i class="bi bi-house me-1"></i>Home</span><i class="arrow small fa-solid fa-chevron-down"></i></a>
            <ul class="hidden">
              <li><a class="dropdown-item" href="index.html">Home 01</a></li>
              <li><a class="dropdown-item" href="index-02.html">Home 02</a></li>
              <li><a class="dropdown-item" href="index-03.html">Home 03</a></li>
              <li><a class="dropdown-item" href="index-04.html">Home 04</a></li>
              <li><a class="dropdown-item" href="index-05.html">Home 05</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> <span> <i class="bi bi-basket me-1"></i>Shop List</span><i class="arrow small fa-solid fa-chevron-down"></i></a>
            <ul class="hidden">
              <li><a class="dropdown-item" href="index.html">Home 01</a></li>
              <li><a class="dropdown-item" href="shop-sidebar.html">Shop Sidebar</a></li>
              <li><a class="dropdown-item" href="shop-full-width-col-3.html">Shop Fullwidth Column 3</a></li>
              <li><a class="dropdown-item" href="shop-full-width-col-4.html">Shop Fullwidth Column 4</a></li>
              <li><a class="dropdown-item" href="shop-list-view.html">Shop List View</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> <span> <i class="bi bi-shop me-1"></i>Product Layouts</span><i class="arrow small fa-solid fa-chevron-down"></i></a>
            <ul class="hidden">
              <li><a class="dropdown-item" href="single-product.html">Product Simple</a></li>
              <li><a class="dropdown-item" href="single-product-variable.html">Variations Swatches</a></li>
              <li><a class="dropdown-item" href="single-product-vertical.html">Vertical Gallary</a></li>
              <li><a class="dropdown-item" href="#">With Video</a></li>
              <li><a class="dropdown-item" href="#">With Countdown Timer</a></li>
              <li><a class="dropdown-item" href="#">Product Presentation</a></li>
              <li><a class="dropdown-item" href="shop-list-view.html">List View</a></li>
              <li><a class="dropdown-item" href="#">Details Gallery</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> <span> <i class="bi bi-archive me-1"></i>E-Commerce</span><i class="arrow small fa-solid fa-chevron-down"></i></a>
            <ul class="hidden">
              <li><a class="dropdown-item" href="cart.html">Shopping Cart</a></li>
              <li><a class="dropdown-item" href="#">Track Your Order</a></li>
              <li><a class="dropdown-item" href="compare.html">Compare</a></li>
              <li><a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
              <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
              <li><a class="dropdown-item" href="my-account.html">My account</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"> <span> <i class="bi bi-bookmarks me-1"></i>Blog</span><i class="arrow small fa-solid fa-chevron-down"></i></a>
            <ul class="hidden">
              <li><a class="dropdown-item" href="#">Blog Standard</a></li>
              <li><a class="dropdown-item" href="#">Blog Grid</a></li>
              <li><a class="dropdown-item" href="#">Blog List</a></li>
              <li><a class="dropdown-item" href="#">Blog Details Full Width</a></li>
              <li><a class="dropdown-item" href="#">Blog Details</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>

</div>
