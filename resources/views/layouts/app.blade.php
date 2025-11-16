<!DOCTYPE html>
<html lang = "id">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta name = "csrf-token" content = "{{ csrf_token() }}">
        <title>@yield('title', 'GOODANG - Sistem Manajemen Gudang')</title>
        
        <!-- Tailwind CSS -->
        @vite('resources/css/app.css')
        
        <!-- Lucide Icons (via CDN atau build) -->
        <script src = "https://unpkg.com/lucide@latest"></script>
        
        @stack('styles')  
    </head>
    <body class = " bg-gray-50 dark:bg-slate-900 transtition-colors duration-300" id = "app-body">

        @include('components.header')

        <div class="flex">
            <!-- Sidebar Component -->
            @include('components.sidebar')
            
            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-auto min-h-screen">
                @yield('content')
            </main>
        </div>

        <!-- Vite JS -->
        @vite('resources/js/app.js')
        
        <!-- Lucide Icons Initialization -->
        <script>
            lucide.createIcons();
        </script>
        
        @stack('scripts')
    </body>
</html>