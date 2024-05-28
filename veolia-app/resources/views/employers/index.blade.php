@extends('layouts.app')

@section('content')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Employers</h1>
        <a href="{{ url('/employers/create') }}" class="inline-block mb-4 py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Add New Employer</a>
        <ul class="space-y-4">
            @foreach ($employers as $employer)
            <li class="p-4 bg-white shadow rounded flex justify-between items-center">
                <div class="font-semibold text-gray-700 text-lg">{{ $employer->noms }} - {{ $employer->serie_materiel }}</div>
                <div class="space-x-2">
                    <a href="{{ url('/employers/' . $employer->noms) }}" class="py-2 px-4 font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300 transition duration-300">View</a>
                    <a href="{{ url('/employers/' . $employer->noms . '/edit') }}" class="py-2 px-4 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Edit</a>
                    <form action="{{ url('/employers/' . $employer->noms) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-4 font-medium text-white bg-red-500 rounded hover:bg-red-400 transition duration-300">Delete</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

@endsection

