@extends('layouts.app')
@section('content')
<div  class="container mx-auto p-4" >
<h1 class="text-3xl font-bold mb-4"" >Employer Details</h1>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Name:</strong> {{ $employer->noms }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Sensitive Position:</strong> {{ $employer->poste_sensible }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Site:</strong> {{ $employer->site }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Date of Acquisition:</strong> {{ $employer->date_dacquisition }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Year of Acquisition:</strong> {{ $employer->anne_dacquisition }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Seniority:</strong> {{ $employer->anciennet }}</p>
<p class="text-xl font-semibold text-gray-700"><strong  class="text-gray-500" >Equipment Series:</strong> {{ $employer->serie_materiel }}</p>

<a href="{{ url('/employers/' . $employer->noms . '/edit') }}">Edit</a>
<form action="{{ url('/employers/' . $employer->noms) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
</div>
@endsection
