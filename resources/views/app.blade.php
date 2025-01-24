<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Ecommerce Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="sticky top-0 z-10 h-[73px] dark:bg-gray-900 flex items-center p-3 shadow-md">
        <div class="logo w-1/6 text-gray-800 dark:text-gray-100 px-3 py-5">
            <a href="{{ route('home.index') }}">
                <img class="dark:hidden block w-40 h-15 object-cover ml-[-30px]"
                    src="{{ url('storage/Products/logo.png') }}" alt="logo">
                <img class="dark:block hidden w-40  h-15 object-cover ml-[-30px]"
                    src="{{ url('storage/Products/logo_dark.png') }}" alt="logo">
            </a>
        </div>
        <div class="w-5/6 flex justify-between items-center ">
            <span>@yield('back-arrow')</span>
            <div class=" flex flex-row-reverse items-center gap-3">
                <div class="dark:bg-black bg-white w-fit">
                    <button id="theme-toggle"
                        class="px-3 py-2 text-white bg-gray-950 rounded-md hover:bg-gray-700 dark:bg-gray-100 dark:text-black dark:hover:bg-gray-300">
                        <i class="fa-solid fa-circle-half-stroke"></i>
                    </button>
                </div>
                <span>@yield('create')</span>
            </div>
        </div>
    </header>
    <main class="flex w-full h-[calc(100vh-73px)]">
        <aside id="aside"
            class=" w-1/6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 h-full flex flex-col relative">
            <nav class="flex-grow overflow-y-auto">
                <ul>
                    <li><a class="p-3 {{ request()->routeIs('dashboard') ? 'dark:bg-slate-600 bg-slate-300' : '' }} dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block"
                            href="{{ route('dashboard') }}"><i class="icon fa-solid fa-home pr-2"></i><span
                                class="text_icon">Home</span></a>
                    </li>
                    <li><a class="p-3 {{ Request::is('clients*') ? 'dark:bg-slate-600 bg-slate-300' : '' }} dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block"
                            href="{{ route('clients.index') }}"><i class="icon fa-solid fa-users pr-2"></i></i><span
                                class="text_icon">Clients</span></a></li>
                    <li><a class="p-3 {{ Request::is('categories*') ? 'dark:bg-slate-600 bg-slate-300' : '' }} dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block"
                            href="{{ route('categories.index') }}"><i class="icon fa-solid fa-list pr-2"></i><span
                                class="text_icon">Categories</span></a>
                    </li>
                    <li><a class="p-3 {{ Request::is('products*') ? 'dark:bg-slate-600 bg-slate-300' : '' }} dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block"
                            href="{{ route('products.index') }}"><i class="icon fa-solid fa-box pr-2"></i><span
                                class="text_icon">Products</span></a></li>
                    <li><a class="p-3 {{ Request::is('orders*') ? 'dark:bg-slate-600 bg-slate-300' : '' }} dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block"
                            href="{{ route('orders.index') }}"><i class="icon fa-solid fa-shopping-cart pr-2"></i><span
                                class="text_icon">Orders</span></a>
                    </li>
                </ul>
                <span id="close">
                    <i
                        class="fa-solid z-30 cursor-pointer fa-chevron-left absolute top-[calc(50%-73px)] right-0 translate-x-[50%] bg-gray-900 dark:bg-gray-100 text-gray-100 dark:text-gray-900 w-10 h-10 rounded-full flex justify-center items-center"></i>
                    </i>
                </span>
            </nav>
            <div class="logout">
                <a class="p-3 dark:hover:bg-slate-600 hover:bg-slate-300 w-full inline-block" href="#"><i
                        class="icon fa-solid fa-sign-out-alt pr-2"></i><span class="text_icon">Logout</span></a>
            </div>
        </aside>
        <section class="w-5/6 flex-grow dark:bg-gray-400 bg-gray-200 overflow-y-auto flex flex-col">
            @yield('content')
        </section>
    </main>
    <script>
        let text_icon = document.getElementsByClassName('text_icon');
        let icon = document.getElementsByClassName('icon');
        let close = document.getElementById('close');
        let aside = document.getElementById('aside');
        close.addEventListener('click', function() {
            for (let i = 0; i < text_icon.length; i++) {
                text_icon[i].classList.toggle('hidden');
            }
            for (let i = 0; i < icon.length; i++) {
                icon[i].classList.toggle('pr-0');
            }
            aside.classList.toggle('w-fit');
        })
    </script>
</body>

</html>
