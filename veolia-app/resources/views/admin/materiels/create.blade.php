@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-800 text-center">
        <i class="fas fa-plus fa-fw mr-2"></i> Add New Materiel</h1>
    <form action="{{ route('materiels.store') }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
        @csrf
        <label class="block text-gray-700" for="type">Type:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="type" name="type" required><br>

        <label class="block text-gray-700" for="inventaire">Inventaire:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="inventaire" name="inventaire" required><br>

        <label class="block text-gray-700" for="serie">Serie:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="serie" name="serie" required><br>

        <label class="block text-gray-700" for="description">Description:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="description" name="description" required><br>

        <label class="block text-gray-700" for="ram">RAM:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="ram" name="ram" required><br>

        <label class="block text-gray-700" for="processeur">Processeur:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="processeur" name="processeur" required><br>

        <label class="block text-gray-700" for="hdd">HDD:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="hdd" name="hdd" required><br>

        <label class="block text-gray-700" for="noms_employers">Noms Employers:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="noms_employers" name="noms_employers" required><br>

        <label class="block text-gray-700" for="anciennet">Anciennet:</label>
        <input class="w-full mt-1 p-2 border rounded" type="text" id="anciennet" name="anciennet" required><br>

        <div class="flex justify-end">
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
                <i class="fas fa-plus fa-fw mr-2"></i> Add Materiel</button>
        </div>
    </form>
</div>
@endsection

