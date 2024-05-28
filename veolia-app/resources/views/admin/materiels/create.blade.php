@extends('layouts.app')

@section('content')
    <h1>Add Materiel</h1>
    <form action="{{ route('materiels.store') }}" method="POST">
        @csrf
        <input type="text" name="type" placeholder="Type">
        <input type="text" name="inventaire" placeholder="Inventaire">
        <input type="text" name="serie" placeholder="Serie">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="ram" placeholder="RAM">
        <input type="text" name="processeur" placeholder="Processeur">
        <input type="text" name="hdd" placeholder="HDD">
        <input type="text" name="noms_employers" placeholder="Noms Employers">
        <button type="submit">Add</button>
    </form>
@endsection
