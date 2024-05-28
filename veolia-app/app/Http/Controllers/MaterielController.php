<?php
namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    public function index()
    {
        $materiels = Materiel::all();
        return view('admin.materiels.index', compact('materiels'));
    }

    public function create()
    {
        return view('admin.materiels.create');
    }

    public function store(Request $request)
    {
        Materiel::create($request->all());
        return redirect()->route('materiels.index');
    }

    public function edit(Materiel $materiel)
    {
        return view('admin.materiels.edit', compact('materiel'));
    }

    public function update(Request $request, Materiel $materiel)
    {
        $materiel->update($request->all());
        return redirect()->route('materiels.index');
    }

    public function destroy(Materiel $materiel)
    {
        $materiel->delete();
        return redirect()->route('materiels.index');
    }
}
