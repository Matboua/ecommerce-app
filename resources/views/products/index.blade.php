@extends('app')
@section('title', 'Products')
@section('create')
    <a class="bg-sky-600 rouded-lg py-2 px-5 rounded-lg text-gray-200 font-medium " href='{{route('products.create')}}'><i class="fa-solid fa-plus pr-2"></i>Product</a>
@endsection

@section('content')
<div class="relative overflow-x-auto shadow-md p-6">
    
    <table class="rounded-md overflow-hidden w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Categorie
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th class="text-center" colspan="3" scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-6">
                        {{$item->id}}
                    </td>
                    <td class="px-6 py-6">
                        {{$item->name}}
                    </td>
                    <td class="px-6 py-6">
                        {{$item->price}}
                    </td>
                    <td class="px-6 py-6">
                        {{$item->stock}}
                    </td>
                    <td class="px-6 py-6">
                        {{$item->description}}
                    </td>
                    <td class="px-6 py-6">
                        {{$item->Categorie->name}}
                    </td>
                    <td class="px-6 py-6 min-w-[100px]">
                        <img src="{{url($item->image)}}" alt="{{$item->name}}" class="w-14 h-14 border-2 border-green-500 rounded-lg">
                    </td>
                    <td class="px-6 py-6">
                        <a href="{{route('products.show', $item->id)}}"><i class="fa-solid fa-eye text-sky-600 fa-lg"></i></a>
                    </td>
                    <td class="px-6 py-6">
                        <a href="{{route('products.edit', $item->id)}}"><i class="fa-solid fa-edit text-yellow-600 fa-lg"></i></a>
                    </td>
                    <td class="px-6 py-6">
                        <form action="{{route('products.destroy', $item->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit"><i class="fa-solid fa-trash-alt text-red-600 fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection