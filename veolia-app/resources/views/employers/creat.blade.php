{{-- resources/views/employers/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4" >
<h1 class="text-3xl font-bold mb-4 text-gray-800 text-center"> 
   <i class="fas fa-user-plus fa-fw mr-2"></i>  Create New Employer</h1>
<form action="{{ url('/employers') }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf
    <label class="block text-gray-700  " for="noms">Name:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="text" id="noms" name="noms" required><br>

    <label class="block text-gray-700" for="poste_sensible">Sensitive Position:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="text" id="poste_sensible" name="poste_sensible" required><br>

    <label class="block text-gray-700" for="site">Site:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="text" id="site" name="site" required><br>

    <label class="block text-gray-700" for="date_dacquisition">Date of Acquisition:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="text" id="date_dacquisition" name="date_dacquisition" required><br>

    <label class="block text-gray-700" for="anne_dacquisition">Year of Acquisition:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="number" id="anne_dacquisition" name="anne_dacquisition" required><br>

    <label class="block text-gray-700" for="anciennet">Seniority:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="number" id="anciennet" name="anciennet" required><br>

    <label class="block text-gray-700" for="serie_materiel">Equipment Series:</label>
    <input  class="w-full mt-1 p-2 border rounded"  type="text" id="serie_materiel" name="serie_materiel" required><br>
     <div class="flex justify-end" >
    <button type="submit"  class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300" > 
        <i class="fas fa-user-plus fa-fw mr-2"></i> add</button>
</div>
</form>
</div>
@endsection


