<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
<<<<<<< HEAD
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
=======
            {{ __('Perbarui Kata Sandi') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
>>>>>>> 4ec54b9e (update terbaru)
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
<<<<<<< HEAD
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
=======
            <x-input-label for="update_password_current_password" :value="__('Kata Sandi Saat Ini')" />
>>>>>>> 4ec54b9e (update terbaru)
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <x-input-label for="update_password_password" :value="__('New Password')" />
=======
            <x-input-label for="update_password_password" :value="__('Kata Sandi Baru')" />
>>>>>>> 4ec54b9e (update terbaru)
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
<<<<<<< HEAD
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
=======
            <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
>>>>>>> 4ec54b9e (update terbaru)
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
<<<<<<< HEAD
            <x-primary-button>{{ __('Save') }}</x-primary-button>
=======
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>
>>>>>>> 4ec54b9e (update terbaru)

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
<<<<<<< HEAD
                >{{ __('Saved.') }}</p>
=======
                >{{ __('Tersimpan.') }}</p>
>>>>>>> 4ec54b9e (update terbaru)
            @endif
        </div>
    </form>
</section>
