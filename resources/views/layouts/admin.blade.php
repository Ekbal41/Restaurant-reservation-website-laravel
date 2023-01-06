<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    @include('layouts.navigation')

   

    <nav class="bg-gray-50 dark:bg-gray-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <a href="{{ route('menu.index') }}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('reservation.index') }}"
                            class="text-gray-900 dark:text-white hover:underline">Reservations</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="text-gray-900 dark:text-white hover:underline">Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('table.index') }}"
                            class="text-gray-900 dark:text-white hover:underline">Tables</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <!-- Page Heading -->
     @if (isset($header))
     <header class="bg-white shadow">
         <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
             {{ $header }}
         </div>
     </header>
 @endif

    <!-- Page Content -->
    <main>



        {{ $slot }}

    </main>
    </div>
</body>

</html>
