@extends('app')
@section('title', 'Detail Product')
@section('back-arrow')
<a href="{{route('products.index')}}"><i class="dark:bg-gray-200 p-3 rounded-full fa-solid fa-arrow-left"></i></a>
@endsection

@section('content')

<section class="w-full flex justify-center p-6">
    <div class="w-3/6  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Detail : {{$product->name}}</h5>
        <ul class="font-normal text-gray-700 dark:text-gray-400">
            <li><strong class="text-gray-300">Id: </strong>{{$product->id}}</li>
            <li><strong class="text-gray-300">Name: </strong>{{$product->name}}</li>
            <li><strong class="text-gray-300">Proce: </strong>{{$product->price}}</li>
            <li><strong class="text-gray-300">Stock: </strong>{{$product->stock}}</li>
            <li><strong class="text-gray-300">Description: </strong>{{$product->description}}</li>
            <li><strong class="text-gray-300">Categorie: </strong>{{$product->categorie->name}}</li>
        </ul>
    </div>
</section>

@endsection