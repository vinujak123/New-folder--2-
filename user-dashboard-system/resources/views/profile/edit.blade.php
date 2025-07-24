<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading text-2xl font-bold text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-3xl mx-auto space-y-8">
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-8">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-8">
                @include('profile.partials.update-password-form')
            </div>
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-8">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
