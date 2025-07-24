<x-guest-layout>
    <div class="bg-white dark:bg-gray-900 shadow-card rounded-2xl p-8 w-full max-w-md mx-auto mt-8">
        <h1 class="font-heading text-2xl font-bold text-primary mb-6 text-center">Verify your email</h1>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400 text-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
        <div class="mt-4 flex flex-col gap-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-primary-button class="w-full justify-center">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-sm text-primary hover:underline mt-2">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
