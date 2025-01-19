@extends('app')
@section('title', 'Detail Client')
@section('back-arrow')
<a href="{{route('clients.index')}}"><i class="dark:bg-gray-200 p-3 rounded-full fa-solid fa-arrow-left"></i></a>
@endsection

@section('content')

<section class="w-full flex justify-center p-6">
    <div class="w-3/6  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Client Detail : {{$client->first_name . " " . $client->last_name}}</h5>
        <ul class="font-normal text-gray-700 dark:text-gray-400">
            <li><strong class="text-gray-300">Id: </strong>{{$client->id}}</li>
            <li><strong class="text-gray-300">First Name: </strong>{{$client->first_name}}</li>
            <li><strong class="text-gray-300">Last Name: </strong>{{$client->last_name}}</li>
            <li><strong class="text-gray-300">Phone: </strong>{{$client->phone}}</li>
            <li><strong class="text-gray-300">City: </strong>{{$client->city}}</li>
            <li><strong class="text-gray-300">Birthday: </strong>{{$client->birthday}}</li>
        </ul>
    </div>
</section>

@endsection