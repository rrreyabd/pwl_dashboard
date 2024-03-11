@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <main class="flex flex-col gap-4">
        <h1 class="dark:text-gray-300 font-bold text-3xl my-4">Edit Product</h1>

        <form action="" method="POST" class="flex flex-col gap-4">
            <input 
                type="text" 
                placeholder="Product Name"
                name="name" 
                class="bg-gray-800 border-none px-4 py-2 w-1/2 rounded-md"
            >
            <input 
                type="text" 
                placeholder="Color"
                name="name" 
                class="bg-gray-800 border-none px-4 py-2 w-1/2 rounded-md"
            >
            <input 
                type="text" 
                placeholder="Category"
                name="name" 
                class="bg-gray-800 border-none px-4 py-2 w-1/2 rounded-md"
            >
            <input 
                type="number" 
                placeholder="Price"
                name="price" 
                class="bg-gray-800 border-none px-4 py-2 w-1/2 rounded-md"
            >
            <button class="bg-blue-700 rounded-md px-4 py-2 w-24 font-semibold text-white" type="submit">Update</button>
        </form>
    </main>
@endsection