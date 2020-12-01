@extends('layouts.app')
<div>
    <nav class="bg-gray-800">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{route('products.index')}}"
                           class="px-3 py-2 rounded-md text-sm font-medium
                           {{Request::path() == '/'? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">Products</a>
                        <a href="{{route('products.create')}}"
                           class="px-3 py-2 rounded-md text-sm font-medium
                            {{Request::path() == '/product'? 'text-white bg-gray-900' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}
                            ">Add
                            Product</a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Products
            </h1>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Content goes here -->
            <div class="px-4 py-6 sm:px-0">
                    @yield('content')
            </div>
            <!-- /End content -->
        </div>
    </main>
</div>
