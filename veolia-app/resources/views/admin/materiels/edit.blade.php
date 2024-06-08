@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-800 text-center">
        <i class="fas fa-edit fa-fw mr-2"></i> Edit Materiel</h1>
    <form action="{{ route('materiels.update', $materiel->type) }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
        @csrf
        @method('PUT')
        <label class="block text-gray-700" for="type">Type:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="type" name="type" value="{{ $materiel->type }}" required><br>

        <label class="block text-gray-700" for="inventaire">Inventaire:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="inventaire" name="inventaire" value="{{ $materiel->inventaire }}" required><br>

        <label class="block text-gray-700" for="serie">Serie:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="serie" name="serie" value="{{ $materiel->serie }}" required><br>

        <label class="block text-gray-700" for="description">Description:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="description" name="description" value="{{ $materiel->description }}" required><br>

        <label class="block text-gray-700" for="ram">RAM:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="ram" name="ram" value="{{ $materiel->ram }}" required><br>

        <label class="block text-gray-700" for="processeur">Processeur:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="processeur" name="processeur" value="{{ $materiel->processeur }}" required><br>

        <label class="block text-gray-700" for="hdd">HDD:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="hdd" name="hdd" value="{{ $materiel->hdd }}" required><br>

        <label class="block text-gray-700" for="noms_employers">Noms Employers:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="noms_employers" name="noms_employers" value="{{ $materiel->noms_employers }}" required><br>
         
        <label class="block text-gray-700" for="anciennet">Anciennet:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="anciennet" name="anciennet" value="{{ $materiel->anciennet }}" required><br>
        <div class="flex justify-end">
            <button type="submit" class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600 transition duration-300">
                <i class="fas fa-edit fa-fw mr-2"></i> Update Materiel</button>
        </div>
    </form>
</div>
@endsection
