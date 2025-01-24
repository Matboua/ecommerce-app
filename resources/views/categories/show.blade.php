@extends('app')
@section('title', 'Detail Categorie')
@section('back-arrow')
<a href="{{route('categories.index')}}"><i class="dark:bg-gray-100 bg-gray-900 dark:text-gray-900 text-gray-100 p-3 rounded-full fa-solid fa-arrow-left"></i></a>
@endsection

@section('content')

<section class="w-full flex justify-center p-6">
    <div class="w-3/6  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Category Detail : {{$categorie->name}}</h5>
        <ul class="font-normal text-gray-700 dark:text-gray-400">
            <li><strong class="text-gray-900 dark:text-gray-100">Id: </strong>{{$categorie->id}}</li>
            <li><strong class="text-gray-900 dark:text-gray-100">Name: </strong>{{$categorie->name}}</li>
            <li><strong class="text-gray-900 dark:text-gray-100">Description: </strong>{{$categorie->description}}</li>
        </ul>
    </div>
</section>

@endsection