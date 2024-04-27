<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://leeucode.com/demo/matgar/assets/images/favicon.png" type="image/x-icon">
        <title>Matgar | Index-01</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
        <link href="https://leeucode.com/demo/matgar/assets/css/all.min.css" rel="stylesheet">
        <link href="https://leeucode.com/demo/matgar/assets/css/animate.min.css" rel="stylesheet">
        <link href="https://leeucode.com/demo/matgar/assets/css/slick.css" rel="stylesheet">
        <link href="https://leeucode.com/demo/matgar/assets/css/nouislider.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css">
    @livewireStyles
</head>

<body class="antialiased">
    <x-top-header />
    <div class="py-4 border-top border-silver-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 col-md-3 col-6">
            <a class="logo" href="/">
                <img class="max-width-180-" src="/amtar.png" alt="Amtar store Logo"/></a></div>
          <div class="col-md-7 d-none d-md-block">
            <div class="border input-group group-circle mx-auto w-85">
              <input class="form-control group-py-3 ps-3" type="text" placeholder="{{ __("Search") }}"/>
              <button class="btn px-4" type="submit"><i class="bi bi-search"></i></button>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-6 small">
            <div class="d-flex gap-4 text-dark-lead align-items-center justify-content-end">
                <a class="d-none d-lg-flex flex-column align-items-center position-relative" href="#">
                    <i class="bi bi-person h4 m-0"></i>
                    <span class="small">{{ __("Account") }}</span>
                </a>
                <a class="d-flex flex-column btn-cart-offcanvas align-items-center position-relative" href="#">
                    <i class="bi bi-bag h4 m-0"></i>
                    <span class="badge-circle text-white">3</span>
                    <span class="small d-none d-lg-block">Cart</span>
                </a>
                <a class="d-lg-none d-flex flex-column align-items-center" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="bi bi-list h4 m-0"></i>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <x-nav /> --}}

    @yield('content')

    <x-footer />
    @livewire('side-cart')




    <script src="https://leeucode.com/demo/matgar/assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://leeucode.com/demo/matgar/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://leeucode.com/demo/matgar/assets/js/jquery.nice-select.min.js"></script>
    <script src="https://leeucode.com/demo/matgar/assets/js/slick.min.js"></script>
    <script src="https://leeucode.com/demo/matgar/assets/js/nouislider.min.js"></script>
    <script src="https://leeucode.com/demo/matgar/assets/js/jquery.zoom.min.js"></script>
    <script src="/assets/js/app.js"></script>
    @livewireScripts
</body>

</html>
