@extends('layouts.nav')
@section('content')
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        @foreach($products as $product)
                        <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50">
                                <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50">
                                <span class="sr-only">Delete</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="">
                                        <div class="text-sm font-medium text-gray-900">
                                            <a class="text-indigo-600 hover:text-indigo-900" href="{{route('products.show', $product->id)}}">{{$product->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$product->description}}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{App\Formatter::moneyFormat($product->price)}}
                            </td>
                            <form method="GET" action="{{route('products.edit', $product)}}">
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button type="submit"class="text-indigo-600 hover:text-indigo-900">Edit</button>
                            </td>
                            </form>
                            <form method="POST" action="/product/{{$product->id}}">
                                @csrf
                                @method('DELETE')
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                            </td>
                            </form>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
