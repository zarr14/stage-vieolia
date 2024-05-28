@extends('layouts.app')

@section('content')
    <h1>Edit Materiel</h1>
    <form action="{{ route('materiels.update', $materiel->type) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Add form fields here pre-filled with $materiel data -->
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $materiel->type }}">
        
        <label for="inventaire">Inventaire:</label>
        <input type="text" name="inventaire" value="{{ $materiel->inventaire }}">

        <label for="serie">Serie:</label>
        <input type="text" name="serie" value="{{ $materiel->serie }}">

        <label for="description">Description:</label>
        <input type="text" name="description" value="{{ $materiel->description }}">

        <label for="ram">RAM:</label>
        <input type="text" name="ram" value="{{ $materiel->ram }}">

        <label for="processeur">Processeur:</label>
        <input type="text" name="processeur" value="{{ $materiel->processeur }}">

        <label for="hdd">HDD:</label>
        <input type="text" name="hdd" value="{{ $materiel->hdd }}">

        <label for="noms_employers">Noms Employers:</label>
        <input type="text" name="noms_employers" value="{{ $materiel->noms_employers }}">

        <button type="submit">Update</button>
    </form>
@endsection
