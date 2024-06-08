@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">
        <i class="fas fa-laptop fa-fw mr-2"></i> Materiel Details</h1>
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Type:</label>
            <span class="text-gray-600">{{ $materiel->type }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Inventaire:</label>
            <span class="text-gray-600">{{ $materiel->inventaire }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Serie:</label>
            <span class="text-gray-600">{{ $materiel->serie }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Description:</label>
            <span class="text-gray-600">{{ $materiel->description }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">RAM:</label>
            <span class="text-gray-600">{{ $materiel->ram }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Processeur:</label>
            <span class="text-gray-600">{{ $materiel->processeur }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">HDD:</label>
            <span class="text-gray-600">{{ $materiel->hdd }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">noms:</label>
            <span class="text-gray-600">{{ $materiel->noms_employers }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">anciennet:</label>
            <span class="text-gray-600">{{ $materiel->anciennet }}</span>
        </div>
        <!-- Add more fields as needed -->
    </div>
    <div class="mb-4 text-center mt-4">
        <a href="{{ route('materiels.index') }}" class="inline-flex items-center py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300">
            <i class="fas fa-arrow-left mr-2"></i> Back to Materiels
        </a>
    </div>
</div>
@endsection

