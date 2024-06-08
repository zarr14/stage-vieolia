@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4 items-center">
    <h1 class="text-3xl font-bold mb-4 text-gray-800 text-center">
        <i class="fas fa-laptop fa-fw mr-2"></i> Materiels</h1>
       
    <!-- Search Form -->
    <form method="GET" action="{{ route('materiels.index') }}" class="mb-4 text-center">
        <input type="text" name="search" placeholder="Search by type" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mb-4">
        <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
            <i class="fas fa-search fa-fw"></i> Search
        </button>
        <select name="anciennet" onchange="this.form.submit()" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mb-4">
            <option value="">Select Seniority Range</option>
            <option value="1-5">1-5 years</option>
            <option value="6-9">6-9 years</option>
            <option value="10-15">10-15 years</option>
        </select> <div class="mb-4 mt-4 text-center">
            <a href="{{ route('materiels.create') }}" class="inline-block py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300"> 
                <i class="fas fa-plus fa-fw mr-2"></i> Add New Materiel</a>
        </div>
    </form>

    <ul class="space-y-4">
        @foreach ($materiels as $materiel)
        <li class="p-4 bg-white shadow rounded flex justify-between items-center">
            <div class="font-semibold text-gray-700 text-lg">{{ $materiel->type }} - {{ $materiel->description }}-{{ $materiel->anciennet }}</div>
            <div class="space-x-2">
                <a href="{{ route('materiels.show', $materiel->type) }}" class="py-2 px-4 font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300 transition duration-300"> 
                    <i class="fas fa-eye fa-fw mr-2"></i> View</a>
                <a href="{{ route('materiels.edit', $materiel->type) }}" class="py-2 px-4 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">
                    <i class="fas fa-edit fa-fw mr-2"></i> Edit</a>
                <form action="{{ route('materiels.destroy', $materiel->serie) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 font-medium text-white bg-red-500 rounded hover:bg-red-400 transition duration-300">
                        <i class="fas fa-trash fa-fw mr-2"></i> Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    

    
</div>
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchValue = this.value;
        const url = new URL(window.location.href);
        url.searchParams.set('search', searchValue);
        window.location.href = url.href;
    });

@endsection

