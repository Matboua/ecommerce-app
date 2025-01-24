@extends('app')
@section('title', 'Detail Order')
@section('back-arrow')
    <a href="{{ route('orders.index') }}"><i
            class="dark:bg-gray-100 bg-gray-900 dark:text-gray-900 text-gray-100 p-3 rounded-full fa-solid fa-arrow-left"></i></a>
@endsection

@section('content')

    <section class="w-full flex justify-center p-6">
        <div
            class="w-3/6  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Order {{ $order->id }} Detail
                : of {{ $order->client->first_name . ' ' . $order->client->last_name }}</h5>
            <ul class="font-normal text-gray-700 dark:text-gray-400">
                <li><strong class="text-gray-300">Id: </strong>{{ $order->id }}</li>
                <li><strong class="text-gray-300">Client:
                    </strong>{{ $order->client->first_name . ' ' . $order->client->last_name }}</li>
                <li><strong class="text-gray-300">Amount: </strong>${{ $order->amount }}</li>
                <li><strong class="text-gray-300">Status: </strong>{{ $order->status }}</li>
                <li><strong class="text-gray-300">Date: </strong>{{ $order->date }}</li>
            </ul>
        </div>
    </section>

@endsection
