@extends('layouts.nav')
@section('content')
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/product/edit/{{$product->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input value="{{$product->name}}" type="text" name="name" id="name" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-lm border-gray-800 rounded-md">
                                </div>
                                <div class="col-span-10 sm:col-span-4">
                                    <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                                    <input value="{{$product->size}}"  type="text" name="size" id="size" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-lm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-10 sm:col-span-4">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <input value="{{$product->price}}"  type="text" name="price" id="price" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-lm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <input value="{{$product->description}}"  type="text" name="description" id="description" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-lm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>


@endsection
