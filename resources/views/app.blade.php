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
    <header class="sticky top-0 z-10 h-[73px] dark:bg-gray-900 flex items-center p-3 shadow-2xl border-b border-b-white">
        <div class="logo w-1/6 text-gray-200 px-3 py-5 text-2xl font-medium border-b border-b-white">
            <a href="{{route('home.index')}}" >E-commerce Store</a>
        </div>  
        <div class="w-5/6 flex justify-between">
            <span>@yield('back-arrow')</span>
            <span>@yield('create')</span>
            
        </div>
    </header>
    <main class="container flex h-[calc(100vh-73px)]">
        <aside class=" w-1/6 bg-white dark:bg-gray-900 text-gray-600 dark:text-gray-200 h-full flex flex-col">
            <nav class="flex-grow overflow-y-auto">
                <ul>
                    <li><a class="p-3 hover:bg-slate-600 w-full inline-block" href="{{route('home.index')}}"><i class="fa-solid fa-home pr-2"></i>Home</a></li>
                    <li><a class="p-3 hover:bg-slate-600 w-full inline-block" href="{{route('clients.index')}}"><i class="fa-solid fa-users pr-2"></i>Clients</a></li>
                    <li><a class="p-3 hover:bg-slate-600 w-full inline-block" href="{{route('categories.index')}}"><i class="fa-solid fa-list pr-2"></i>Categories</a></li>
                    <li><a class="p-3 hover:bg-slate-600 w-full inline-block" href="{{route('products.index')}}"><i class="fa-solid fa-box pr-2"></i>Products</a></li>
                    <li><a class="p-3 bg-slate-600 hover:bg-slate-600 w-full inline-block" href="{{route('orders.index')}}"><i class="fa-solid fa-shopping-cart pr-2"></i>Orders</a></li>
                </ul>
            </nav>
            <div class="logout">
                <a class="p-3 hover:bg-slate-600 w-full inline-block" href="#"><i class="fa-solid fa-sign-out-alt pr-2"></i>Logout</a>
            </div>
        </aside>
        <section class="w-5/6  bg-gray-400 overflow-y-auto flex flex-col">
            @yield('content')
        </section>
    </main>
</body>
</html>