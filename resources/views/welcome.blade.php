<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Ecommerce Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body>
    <header class="sticky top-0 z-10 h-[73px] dark:bg-gray-900 flex items-center p-8 shadow-md border-b border-b-white">
        <div class="logo w-1/6 text-gray-200 px-3 py-5 text-2xl font-medium border-b border-b-white">
            <a href="{{route('products.index')}}" >E-commerce Store</a>
        </div>  
        <div class="w-5/6 flex justify-between">
            <span>@yield('back-arrow')</span>
            <span>
                @yield('create')
                @yield('login')
                @yield('cart')
            </span>
        </div>
    </header>
        @yield('content')
    </main>
</body>
</html>