@extends('welcome')
@section('title', 'Home Page')

@section('cart')
    <a href="{{route('cart.show')}}"><i class="fa-solid mx-3 fa-cart-plus fa-2xl text-gray-900 dark:text-white ml-8"></i></a>
@endsection
@section('darkmode')
    <div class="dark:bg-black bg-white w-fit">
        <button
            id="theme-toggle"
            class="px-3 py-2 text-white bg-gray-950 rounded-md hover:bg-gray-700 dark:bg-gray-100 dark:text-black dark:hover:bg-gray-300">
            <i class="fa-solid fa-circle-half-stroke"></i>
        </button>
    </div>
@endsection

@section('content')
    <div class="dark:bg-gray-800 bg-gray-100 min-h-[calc(100vh-73px)]">
        <div class="container mx-auto p-8  w-10/12">
            <div class="flex flex-wrap">
                <!-- Product Images -->
                <div class="w-full md:w-1/2 pr-4">
                    <img src="{{url($product->image)}}" alt="{{$product->name}}"
                                class="bg-white w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                    <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                    <img src="{{url($product->image)}}" alt="{{$product->name}}"
                                    class="bg-white size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/2 pl-4">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-2">{{$product->name}}</h2>
                    <p class=" text-gray-600 dark:text-gray-300 mb-4">Categorie: {{$product->name}}</p>
                    <div class="mb-4">
                    <span class="text-2xl font-bold mr-2  text-gray-900 dark:text-gray-100">${{$product->price}}</span>
                    <span class="text-gray-600 dark:text-gray-400  line-through">${{$product->price + 50}}</span>
                    </div>
                    <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-yellow-500">
                        <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-yellow-500">
                        <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-yellow-500">
                        <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-yellow-500">
                        <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-yellow-500">
                        <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 text-gray-600 dark:text-gray-300 ">4.5 (120 reviews)</span>
                    </div>
                    <p class=" text-gray-600 dark:text-gray-300 mb-6">{{$product->description}}</p>

                    <div class="flex space-x-4 mb-6">
                        <div class="flex items-center gap-3 mr-6">
                            <h4 class="text-sm font-bold dark:text-gray-100 text-gray-800">Qty:</h4>
                            <button type="button"
                                class="flex items-center justify-center w-5 h-5 bg-blue-600 outline-none rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                </svg>
                            </button>
                            <span class="font-bold text-sm leading-[16px] dark:text-gray-100">2</span>
                            <button type="button"
                                class="flex items-center justify-center w-5 h-5 bg-blue-600 outline-none rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                                <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                </svg>
                            </button>
                        </div>
                        <button
                            class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            Add to Cart
                        </button>
                    </div>

                    <div>
                    <h3 class="text-lg font-semibold mb-2 text-gray-900 dark:text-gray-100 ">Key Features:</h3>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 ">
                        <li>Industry-leading noise cancellation</li>
                        <li>30-hour battery life</li>
                        <li>Touch sensor controls</li>
                        <li>Speak-to-chat technology</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection