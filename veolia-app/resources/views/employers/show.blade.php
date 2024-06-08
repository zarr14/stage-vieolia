@extends('layouts.app')
@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">
        <i class="fas fa-user fa-fw mr-2"></i>  Employer Details</h1>
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Name:</label>
            <span class="text-gray-600">{{ $employer->noms }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Sensitive Position:</label>
            <span class="text-gray-600">{{ $employer->poste_sensible }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Site:</label>
            <span class="text-gray-600">{{ $employer->site }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Date of Acquisition:</label>
            <span class="text-gray-600">{{ $employer->date_dacquisition }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Year of Acquisition:</label>
            <span class="text-gray-600">{{ $employer->anne_dacquisition }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Seniority:</label>
            <span class="text-gray-600">{{ $employer->anciennet }}</span>
        </div>
        <div class="mb-4">
            <label class="text-xl font-semibold text-gray-800">Equipment Series:</label>
            <span class="text-gray-600">{{ $employer->serie_materiel }}</span>
        </div>
        <div class="flex space-x-2 mt-4">
            <a href="{{ url('/employers/' . $employer->noms . '/edit') }}" class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600 transition duration-300">
                <i class="fas fa-edit fa-fw mr-2"></i> Edit</a>
            <form action="{{ url('/employers/' . $employer->noms) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="py-2 px-4 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300"> 
                    <i class="fas fa-trash fa-fw mr-2"></i> Delete</button>
            </form>
        </div>
        
    </div><div class="mb-4 text-center mt-4">
            <a href="{{ url('/employers') }}" class="inline-flex items-center py-2 px-4 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300">
                <i class="fas fa-arrow-left mr-2"></i> Back to Employers
            </a>
        </div>
</div>
@endsection


