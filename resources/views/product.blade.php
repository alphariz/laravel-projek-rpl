<x-app-layout title="Product">
    <div class="px-8 py-4 mx-auto bg-white rounded-lg shadow-md max-w-7xl dark:bg-gray-800">
        <div class="flex items-center justify-between">
            <span class="text-lg font-light text-gray-600 dark:text-gray-400">Product List</span>
            <a class="inline-flex px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" href="/product/add">
                <svg class="self-center w-4 h-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" /></svg>
                Design</a>
        </div>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($product as $productData)
            <div class="max-w-xs m-4 mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="px-4 py-2">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white">{{ $productData->name }}</h1>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">{{ $productData->description }}</p>
                </div>

                {{-- <img class="object-cover w-full h-48 mt-2" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80" alt="NIKE AIR"> --}}
                <img class="object-cover w-full h-48 mt-2" src="{{ asset('storage/'.$productData->image_path) }}" alt="{{ $productData->name }}">

                <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                    <h1 class="text-lg font-bold text-white">{{ $productData->price }} IDR</h1>
                    <div class="inline-flex">
                        <form action="{{ route('product.show',['product'=>$productData->id]) }}" method="get">
                            @csrf
                            <button type="submit" class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white border border-gray-800 rounded-l hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Edit</button>
                        </form>
                        <form action="{{ route('product.destroy',['product'=>$productData->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white border-t border-b border-r border-gray-800 rounded-r hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
