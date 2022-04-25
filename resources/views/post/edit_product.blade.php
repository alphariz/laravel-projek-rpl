<x-app-layout title="Edit Product">
    @slot('main')
    <div class="max-w-3xl px-8 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
        <h1 class="text-xl font-medium text-gray-900 dark:text-gray-300">Edit Product</h1>
        <hr class="w-full mt-4 mb-4 bg-slate-900">
        <form action="{{ route('product.update',['product'=>$product->id]) }}" id="form-edit-product" method="POST">
            @method('put')
            @csrf
            <div class="flex divide-x-2">
                <div class="w-1/2">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
                        <input type="text" id="name" name="name" value="{{ $product->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Stock</label>
                        <input type="number" id="stock" name="stock" value="{{ $product->stock }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Price</label>
                        <input type="number" id="price" name="price" value="{{ $product->price }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                </div>
                <div class="w-1/2 ml-4">
                    <div class="w-[21rem] m-3 p-2 border-2 rounded-lg shadow-md">
                        <img class="block object-cover w-full mx-auto h-60" id="image" name="image" src="{{ asset('storage/'.$product->image_path) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Description</label>
                <textarea id="description" name="description" class="block w-full h-48 px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" required>{{ $product->description }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('product.index') }}" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">Back</a>
                <button type="submit" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500">Edit Product</button>
            </div>
        </form>
    </div>
    @endslot
    @slot('script')
    <script>
        document
            .getElementById("form-edit-product")
            .addEventListener("submit", function(event) {
                event.preventDefault();
                swal({
                    title: "Success!"
                    , text: "Product edited successfully!"
                    , icon: "success"
                    , type: "success"
                , }).then(function() {
                    document.getElementById("form-edit-product").submit();
                });
            });

    </script>
    @endslot
</x-app-layout>
