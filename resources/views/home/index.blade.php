@extends('welcome')
@section('title', 'Home Page')

@section('cart')
    <a href="{{ route('cart.show') }}"><i
            class="fa-solid mx-3 fa-cart-plus fa-2xl text-gray-900 dark:text-white ml-8"></i></a>
@endsection
@section('darkmode')
    <div class="dark:bg-black bg-white w-fit">
        <button id="theme-toggle"
            class="px-3 py-2 text-white bg-gray-950 rounded-md hover:bg-gray-700 dark:bg-gray-100 dark:text-black dark:hover:bg-gray-300">
            <i class="fa-solid fa-circle-half-stroke"></i>
        </button>
    </div>
@endsection

@section('content')
    <section class="dark:bg-gray-800 bg-gray-100 flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 my-10 xl:w-10/12 px-2">
            {{-- Product Strat --}}
            @foreach ($products as $item)
                <div
                    class="relative dark:bg-gray-900 flex max-w-xs flex-col items-center overflow-hidden rounded-lg border dark:border-gray-800 border-gray-100 dark:bg-gray-900 bg-white shadow-md group">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl"
                        href="{{ route('products.item', $item->id) }}">
                        <img class="object-cover  group-hover:opacity-100 transition-opacity duration-300 bg-white"
                            src="{{ url($item->image) }}" />
                        <span
                            class="absolute top-0 left-0 m-2 rounded-full bg-black px-2 text-center text-sm font-medium dark:bg-gray-100 group-hover:bg-gray-300 dark:text-gray-900 text-white">39%
                            OFF</span>
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="{{ route('products.item', $item->id) }}">
                            <h5 class="text-xl tracking-tight dark:text-gray-200 text-slate-900">{{ $item->name }}</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span
                                    class="text-3xl dark:text-gray-200 font-bold text-slate-900">{{ $item->price }}</span>
                                <span
                                    class="block text-sm dark:text-gray-200 text-slate-900 line-through">{{ $item->price + 250 }}</span>
                            </p>
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                            </div>
                        </div>
                        <form action="{{ route('cart.add', $item->id) }}" method="post">
                            @csrf
                            <button type="submit"
                                class="w-full dark:bg-gray-800 flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to cart
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{-- Product End --}}
        </div>
    </section>
@endsection
