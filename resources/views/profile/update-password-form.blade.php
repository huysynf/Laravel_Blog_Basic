<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">

        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <div class="input-group input-group-dynamic">
                    <label class="form-label">{{ __('Current Password') }}</label>
                    <input class="multisteps-form__input form-control"  type="password" name="current_password" onfocus="focused(this)" onfocusout="defocused(this)">
                    <x-jet-input-error for="current_password" class="mt-2" />

                </div>
            </div>
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <div class="input-group input-group-dynamic">
                    <label class="form-label">{{ __('New Password') }}</label>
                    <input class="multisteps-form__input form-control"   type="password" onfocus="focused(this)" name="password" onfocusout="defocused(this)">
                    <x-jet-input-error for="password" class="mt-2" />

                </div>
            </div>
            <div class="col-12 col-sm-6 mt-3 mt-sm-0 mt-3">
                <div class="input-group input-group-dynamic">
                    <label class="form-label">{{ __('Confirm Password') }}</label>
                    <input class="multisteps-form__input form-control"  name="password_confirmation"  type="password" onfocus="focused(this)" onfocusout="defocused(this)">
                    <x-jet-input-error for="password_confirmation" class="mt-2" />

                </div>
            </div>
        </div>
        <div class="mt-3">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-slot>

</x-jet-form-section>
