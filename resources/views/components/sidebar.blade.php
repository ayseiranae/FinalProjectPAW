<aside id="sidebar" class="bg-white dark:bg-slate-800 border-r border-gray-100 dark:border-slate-700 w-64 transition-all duration-300 overflow-hidden">
    <nav class="p-4 space-y-2">
        @php
        $menuItems = [
            ['route' => 'dashboard', 'icon' => 'bar-chart-3', 'label' => 'Dashboard'],
            ['route' => 'inventory.index', 'icon' => 'package', 'label' => 'Inventory'],
            ['route' => 'employees.index', 'icon' => 'users', 'label' => 'Employees'],
            ['route' => 'activity.index', 'icon' => 'activity', 'label' => 'Activity Log'],
            ['route' => 'reports.index', 'icon' => 'file-text', 'label' => 'Reports'],
            ['route' => 'settings.index', 'icon' => 'settings', 'label' => 'Settings'],
        ];
        @endphp
        
        @foreach($menuItems as $item)
        <a href="{{ route($item['route']) }}" 
           class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg transition-all
                  {{ request()->routeIs($item['route']) 
                     ? 'bg-red-800 text-white' 
                     : 'text-gray-900 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-slate-700' }}">
            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
            <span>{{ $item['label'] }}</span>
        </a>
        @endforeach
    </nav>
</aside>