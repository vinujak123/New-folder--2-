<x-guest-layout>
    <div class="bg-white dark:bg-gray-900 shadow-card rounded-2xl p-8 w-full max-w-md mx-auto mt-8">
        <h1 class="font-heading text-2xl font-bold text-primary mb-6 text-center">Forgot your password?</h1>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
                <x-primary-button class="w-full justify-center">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
