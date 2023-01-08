<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    @include('layouts.navigation')

   

    <nav class="bg-gray-50 dark:bg-gray-700 sticky top-0 z-50" style="z-index: 0">
        <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
            <div class="flex items-center">
                <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page"><i class="bi bi-house-fill"></i> Site</a>
                    </li>
                    <li>
                        <a href="{{ route('menu.index') }}" class="text-gray-900 dark:text-white hover:underline"
                            aria-current="page"><i class="bi bi-file-earmark-break-fill"></i> Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('reservation.index') }}"
                            class="text-gray-900 dark:text-white hover:underline"><i class="bi bi-ticket-perforated-fill"></i> Reservations</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}"
                            class="text-gray-900 dark:text-white hover:underline"><i class="bi bi-tag-fill"></i> Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('table.index') }}"
                            class="text-gray-900 dark:text-white hover:underline"><i class="bi bi-table"></i> Tables</a>
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
