<div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" wire:ignore tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="u-column1 col-1">
                        <h2 class="tajawal t-start">Se connecter</h2>
                        @if($error)
                            <div class="p-1 alert alert-danger">{{ $error }}</div>
                        @endif

                        <form wire:submit.prevent="login" method="POST">
                            @csrf
                            <p
                                class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <label for="username" class="tajawal">Email&nbsp;<span class="required">*</span></label>
                                <input type="text" wire:model="email" class="lynessa-Input lynessa-Input--text input-text is-valid" placeholder="Tapez votre nom d'utilisateur ou email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <label for="password" class="tajawal">Mot de passe&nbsp;<span class="required">*</span></label>
                                <input class="lynessa-Input lynessa-Input--text input-text is-valid" type="password" placeholder="●●●●●●●●●● " wire:model="password">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="form-row">
                                <button type="submit" class="lynessa-Button button tajawal w-100" value="Se connecter">Se connecter</button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
