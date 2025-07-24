<x-guest-layout>
    <div class="bg-white dark:bg-gray-900 shadow-card rounded-2xl p-8 w-full max-w-md mx-auto mt-8">
        <h1 class="font-heading text-2xl font-bold text-primary mb-6 text-center">Confirm your password</h1>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-6">
            @csrf
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div>
                <x-primary-button class="w-full justify-center">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
