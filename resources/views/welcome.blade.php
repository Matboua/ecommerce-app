<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Ecommerce Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header class="sticky top-0 z-10 h-[73px] bg-white dark:bg-gray-900 shadow-md flex items-center justify-center">
        <div class="w-10/12 flex items-center">
            <div class="logo w-1/6 text-gray-200 py-5 text-2xl font-medium flex items-center mt-1">
                <a class="inline-block" href="{{route('products.index')}}" >
                    <img class="dark:hidden block w-40" src="{{url('storage/products/logo.png')}}" alt="usama">
                    <img class="dark:block hidden w-40" src="{{url('storage/products/logo_dark.png')}}" alt="usama">
                </a>
            </div>  
            <div class="w-5/6 flex justify-between">
                <div>@yield('back-arrow')</div>
                <div class="flex items-center gap-1">
                    @yield('cart')
                    @yield('darkmode')
                    @yield('login')
                    @yield('create')
                </div>
            </div>
        </div>
    </header>
        @yield('content')
    </main>
</body>
</html>