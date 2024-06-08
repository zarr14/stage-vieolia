@extends('layouts.app')

@section('content')

<div class="container mx-auto p-4 items-center">
    <h1 class="text-3xl font-bold mb-4 text-gray-800 text-center">
        <i class="fas fa-user fa-fw mr-2"></i>  Employers</h1>
    
    <!-- Filter Form -->
    <form method="GET" action="{{ url('/employers') }}" class="mb-4">
        <select name="site" onchange="this.form.submit()" class="p-2 border rounded">
            <option value="">Select a Site</option>
            @foreach (['Azhar', 'QODS', 'Mandri', 'Matar', 'Boujerrah', 'Martil', 'CHBAR', "M'diq", 'BOUZAGHLAL', 'Al Youmne', 'F\'nideq', 'Al Massira', 'Azla', 'Oued laou'] as $site)
                <option value="{{ $site }}" {{ request('site') == $site ? 'selected' : '' }}>{{ $site }}</option>
            @endforeach
        </select>
    </form>

    <!-- Search Form -->
    <input type="text" id="searchInput" placeholder="Search by name" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mb-4">

     <!-- Alphabet Filter -->
  

    <ul class="space-y-4">
        @foreach ($employers as $employer)
        <li class="p-4 bg-white shadow rounded flex justify-between items-center">
            <div class="font-semibold text-gray-700 text-lg">{{ $employer->noms }} - {{ $employer->serie_materiel }}-{{$employer->site}} </div>
            <div class="space-x-2">
                <a href="{{ url('/employers/' . $employer->noms) }}" class="py-2 px-4 font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300 transition duration-300"> 
                    <i class="fas fa-eye fa-fw mr-2"></i> View</a>
                <a href="{{ url('/employers/' . $employer->noms . '/edit') }}" class="py-2 px-4 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">
                    <i class="fas fa-edit fa-fw mr-2"></i> Edit</a>
                <form action="{{ url('/employers/' . $employer->noms) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 font-medium text-white bg-red-500 rounded hover:bg-red-400 transition duration-300">
                        <i class="fas fa-trash fa-fw mr-2"></i> Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="mb-4 mt-4 text-center">
        <a href="{{ url('/employers/create') }}" class="inline-block py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300"> 
            <i class="fas fa-user-plus fa-fw mr-2"></i> Add New Employer</a>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $employers->links() }}
    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchValue = this.value;
        const url = new URL(window.location.href);
        url.searchParams.set('search', searchValue);
        window.location.href = url.href;
    });
</script>



@endsection


