<!-- resources/views/layouts/navigation.blade.php -->
<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('logo.svg') }}" class="block h-9 w-auto" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    <a href="{{ route('galleries') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Galleries</a>
                    <a href="{{ route('exhibitions.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Exhibitions</a>
                    <a href="{{ route('news.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">News</a>
                    <a href="{{ route('fairs.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Fairs</a>
                    <a href="{{ route('about') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">About</a>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
