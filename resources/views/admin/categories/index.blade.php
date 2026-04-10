@extends('admin.layouts.app')

<<<<<<< HEAD
@section('title', 'Categories')
=======
@section('title', 'Kategori')
>>>>>>> 4ec54b9e (update terbaru)

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
<<<<<<< HEAD
            <h1 class="text-xl font-semibold text-gray-900">Categories</h1>
            <p class="mt-2 text-sm text-gray-700">Manage your jewelry categories</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ route('admin.categories.create') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                Add Category
=======
            <h1 class="text-xl font-semibold text-gray-900">Kategori</h1>
            <p class="mt-2 text-sm text-gray-700">Kelola kategori perhiasan Anda</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="{{ route('admin.categories.create') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                Tambah Kategori
>>>>>>> 4ec54b9e (update terbaru)
            </a>
        </div>
    </div>

    <div class="mt-8 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
<<<<<<< HEAD
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Products
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Created At
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
=======
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Produk
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Dibuat Pada
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Aksi</span>
>>>>>>> 4ec54b9e (update terbaru)
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                             <!-- ZIDO HQDI HNA  -->
                            <a href="{{ route('categories.show' , $category->id ) }}">

                            <div class="text-sm font-medium text-gray-900">
                                {{ $category->nom }}
                            </div>
                            </a>
                             <!-- LHNA BACH TSL7O SHOZ CATEGORIE -->
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $category->products->count() }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
<<<<<<< HEAD
                        {{ $category->created_at->format('M d, Y') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
=======
                        {{ $category->created_at->translatedFormat('d M Y') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Ubah</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</button>
>>>>>>> 4ec54b9e (update terbaru)
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection