<header class="bg-white dark:bg-slate-800 shadow-sm border-b border-gray-100 dark:border-slate-700 sticky top-0 z-50">
    <div class="flex items-center justify-between px-6 py-4">
        <!-- Logo & Toggle Sidebar -->
        <div class="flex items-center space-x-4">
            <button id="toggle-sidebar" class="lg:hidden text-gray-900 dark:text-gray-100">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
            
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-br from-red-800 to-red-600 rounded-lg flex items-center justify-center">
                    <i data-lucide="package" class="w-6 h-6 text-white"></i>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">GOODANG</h1>
            </div>
        </div>
        
        <!-- Right Actions -->
        <div class="flex items-center space-x-4">
            <!-- Dark Mode Toggle -->
            <button id="toggle-darkmode" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-slate-700 transition-colors">
                <i data-lucide="moon" class="w-5 h-5 text-gray-900 dark:text-gray-100 dark-icon"></i>
                <i data-lucide="sun" class="w-5 h-5 text-gray-900 dark:text-gray-100 light-icon hidden"></i>
            </button>
            
            <!-- Notifications -->
            <button class="relative p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-slate-700 transition-colors">
                <i data-lucide="bell" class="w-5 h-5 text-gray-900 dark:text-gray-100"></i>
                @if(isset($notificationCount) && $notificationCount > 0)
                <span class="absolute top-1 right-1 w-4 h-4 bg-red-500 rounded-full text-white text-xs flex items-center justify-center">
                    {{ $notificationCount }}
                </span>
                @endif
            </button>
            
            <!-- User Profile -->
            <div class="flex items-center space-x-3 pl-4 border-l border-gray-200 dark:border-slate-600">
                <div class="w-9 h-9 bg-gradient-to-br from-red-800 to-red-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                    {{ strtoupper(substr(auth()->user()->name ?? 'AD', 0, 2)) }}
                </div>
                <div class="hidden md:block">
                    <p class="text-sm font-semibold text-gray-900 dark:text-gray-100">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                        {{ auth()->user()->role ?? 'Manager' }}
                    </p>
                </div>
            </div>
            
            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-slate-700 transition-colors">
                    <i data-lucide="log-out" class="w-5 h-5 text-gray-900 dark:text-gray-100"></i>
                </button>
            </form>
        </div>
    </div>
</header>