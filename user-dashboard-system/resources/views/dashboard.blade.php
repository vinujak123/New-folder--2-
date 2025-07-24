<x-app-layout>
    <x-slot name="header">
        <h2 class="font-heading text-2xl font-bold text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            <!-- Welcome Card -->
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-6 flex flex-col justify-between">
                <div>
                    <h3 class="font-heading text-xl font-semibold text-primary mb-2">Welcome, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-600 dark:text-gray-300">You're logged in. Explore your dashboard for the latest updates and stats.</p>
                </div>
            </div>
            <!-- Example Stat Card -->
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-6 flex flex-col items-center justify-center">
                <div class="text-4xl font-bold text-primary">42</div>
                <div class="text-gray-500 mt-2">Example Stat</div>
            </div>
            <!-- Example Activity Card -->
            <div class="bg-white dark:bg-gray-900 shadow-card rounded-xl p-6">
                <h4 class="font-heading text-lg font-semibold text-primary mb-2">Recent Activity</h4>
                <ul class="text-gray-600 dark:text-gray-300 text-sm space-y-1">
                    <li>- Activity 1</li>
                    <li>- Activity 2</li>
                    <li>- Activity 3</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
