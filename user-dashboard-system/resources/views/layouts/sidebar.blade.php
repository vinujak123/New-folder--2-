<div class="flex flex-col h-full py-8 px-4 gap-8">
    <div class="flex items-center justify-center mb-8">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="h-10 w-auto fill-current text-primary" />
        </a>
    </div>
    <nav class="flex-1 flex flex-col gap-2">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 rounded-lg text-gray-700 dark:text-gray-200 hover:bg-primary hover:text-white transition font-medium {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7m6 0v6m0 0H7m6 0h6"/></svg>
            Dashboard
        </a>
    </nav>
    <div class="mt-auto flex flex-col gap-2">
        <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
            <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.797.657 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            Profile
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center w-full px-4 py-2 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1"/></svg>
                Log Out
            </button>
        </form>
    </div>
</div> 