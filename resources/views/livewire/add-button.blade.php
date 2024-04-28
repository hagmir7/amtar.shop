 <div class="d-flex align-items-center gap-2 mt-4">
    <div class="quantity-group">
        <div class="input-group input-group-sm">
            <button class="btn-mins btn text-gray border rounded-0" id="button-addon1" type="button"><i class="bi bi-dash-lg"></i></button>
            <input class="py-2 form-control text-center fw-bold" type="number" min="1" value="1" placeholder=""/>
            <button class="btn-plus btn text-gray border rounded-0" id="button-addon2" type="button"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>
    <!-- Add To Cart Btn.-->
    <a wire:click='toggelAdd()' class="rounded-0 px-4 btn btn-primary mx-1">
        <div wire:loading.remove>
            @if (auth()->user()->hasAdded($product))
            <x-check-icon />
            @else
            <i class="bi bi-basket me-2"></i>
            &#xa0; {{ __("Add To Cart") }}
            @endif
        </div>
        <div class="spinner-border spinner-border-sm" wire:loading role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </a>
    <!-- Favorite Btn.-->
    <a class="btn rounded-0 shadow-sm border me-1" href="#">
        <i class="bi bi-heart"></i>
    </a>
    <a class="btn rounded-0 shadow-sm border" href="#">
        <i class="bi bi-arrow-left-right"></i>
    </a>
</div>
