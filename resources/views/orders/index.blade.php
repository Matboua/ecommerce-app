@extends('app')
@section('title', 'Orders')

@section('content')
    <div class="relative overflow-x-auto shadow-md p-6">

        <table class="rounded-md overflow-hidden w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Client
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th class="text-center" colspan="3" scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->client->first_name . ' ' . $item->client->last_name }}
                        </td>
                        <td class="px-6 py-4 text-nowrap">
                            ${{ $item->amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->date }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('orders.show', $item->id) }}"><i
                                    class="fa-solid fa-eye text-sky-600 fa-lg"></i></a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('orders.edit', $item->id) }}"><i
                                    class="fa-solid fa-edit text-yellow-600 fa-lg"></i></a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('orders.destroy', $item->id) }}" method="POST">
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
