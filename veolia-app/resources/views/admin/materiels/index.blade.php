@extends('layouts.app')

@section('content')
    <h1>Materiels</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Inventaire</th>
                <th>Serie</th>
                <th>Description</th>
                <th>RAM</th>
                <th>Processeur</th>
                <th>HDD</th>
                <th>Noms Employers</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materiels as $materiel)
                <tr>
                    <td>{{ $materiel->type }}</td>
                    <td>{{ $materiel->inventaire }}</td>
                    <td>{{ $materiel->serie }}</td>
                    <td>{{ $materiel->description }}</td>
                    <td>{{ $materiel->ram }}</td>
                    <td>{{ $materiel->processeur }}</td>
                    <td>{{ $materiel->hdd }}</td>
                    <td>{{ $materiel->noms_employers }}</td>
                    <td>
                       <a href="{{ route('materiels.edit', ['materiel' => $materiel->type]) }}">Edit</a> 
                        <form action="{{ route('materiels.destroy', $materiel->type) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
@endsection
