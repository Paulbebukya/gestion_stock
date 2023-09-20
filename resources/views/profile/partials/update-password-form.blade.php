<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Mis de jour de mot de passe') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        
        <div class="my-4">
            <label for="current_password" >Ancien mot de passe</label>
            <input id="current_password" name="current_password" type="text" class="form-control"  />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        
        
        
        <div class="my-4">
            <label for="password" >Nouveau mot de passe</label>
            <input id="password" name="password" type="text" class="form-control"  />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
        
        <div class="my-4">
            <label for="password_confirmation" >Ancien mot de passe</label>
            <input id="password_confirmation" name="password_confirmation" type="text" class="form-control"  />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        
      

        <div class="flex items-center gap-4">
            <button class="btn btn-danger">{{ __('Save') }}</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
