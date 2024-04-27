<div class="col-lg-3 col-md-6">
    <h5 class="mb-4">{{ __("Sign Up Newsletter") }}</h5>
    <p class="small">
        {{ __("Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.") }}
    </p>
    <form wire:submit.prevent='save' class="input-group rounded-3px mt-4 mb-4">
        <input class="form-control rounded-3px" type="text" placeholder="{{ __("Enter Your Email") }}" spellcheck="false" data-ms-editor="true">
        <button class="btn btn-primary rounded-3px" type="submit"><i class="far fa-paper-plane"></i></button>
        {{-- <div class="alert alert-success p-2 mt-3">{{ $message }}</div> --}}
    </form>
    <h6>{{ __("Follow us") }}</h6>
    <ul class="d-flex gap-2 mt-3">
        <li><a class="x-icon hover:bg-facebook shadow-sm bg-white" href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a class="x-icon hover:bg-twitter shadow-sm bg-white" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="x-icon hover:bg-instagram shadow-sm bg-white" href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a class="x-icon hover-primary shadow-sm" href="#"><i class="fab fa-pinterest-p"></i></a></li>
    </ul>
</div>
