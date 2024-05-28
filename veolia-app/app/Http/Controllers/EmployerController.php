<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        return view('employers.index', compact('employers'));
    }

    public function create()
    {
        return view('employers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'noms' => 'required|unique:employer,noms',
            'poste_sensible' => 'required|string',
            'site' => 'required|string',
            'date_dacquisition' => 'required|string',
            'anne_dacquisition' => 'required|integer',
            'anciennet' => 'required|integer',
            'serie_materiel' => 'required|string',
        ]);

        Employer::create($request->all());
        return redirect('/employers')->with('success', 'Employer added successfully!');
    }

    public function show($noms)
    {
        $employer = Employer::where('noms', $noms)->firstOrFail();
        return view('employers.show', compact('employer'));
    }

    public function edit($noms)
    {
        $employer = Employer::where('noms', $noms)->firstOrFail();
        return view('employers.edit', compact('employer'));
    }

    public function update(Request $request, $noms)
    {
        $request->validate([
            'noms' => 'required|string',
            'poste_sensible' => 'required|string',
            'site' => 'required|string',
            'date_dacquisition' => 'required|string',
            'anne_dacquisition' => 'required|integer',
            'anciennet' => 'required|integer',
            'serie_materiel' => 'required|string',
        ]);

        $employer = Employer::where('noms', $noms)->firstOrFail();
        $employer->update($request->all());
        return redirect('/employers')->with('success', 'Employer updated successfully!');
    }

    public function destroy($noms)
    {
        $employer = Employer::where('noms', $noms)->firstOrFail();
        $employer->delete();
        return redirect('/employers')->with('success', 'Employer deleted successfully!');
    }
}

