<?php
namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    public function index(Request $request)

    {    $query = materiel::query();

        if ($request->filled('anciennet')) {
            $range = explode('-', $request->anciennet);
            $query->whereBetween('anciennet', [$range[0], $range[1]]);
        }

        if ($request->filled('search')) {
            $query->where('type', 'like', '%' . $request->search . '%');
        }
       
        $materiels = Materiel::all();
        $materiels = $query->paginate(506);
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

    public function edit($type)
    {
        $materiel = Materiel::where('type', $type)->firstOrFail();
        return view('admin.materiels.edit', compact('materiel'));
    }

    public function update(Request $request, $type)
    {
        $materiel = Materiel::where('type', $type)->firstOrFail();
        $materiel->update($request->all());
        return redirect()->route('materiels.index');
    }

    public function show($type)
    {
        $materiel = Materiel::where('type', $type)->firstOrFail();
        return view('admin.materiels.show', compact('materiel'));
    }

    public function destroy($serie)
    {
        $materiel = Materiel::where('serie', $serie)->firstOrFail();
        $materiel->delete();
        return redirect()->route('materiels.index')->with('success', 'Materiel deleted successfully!');
    }
}
