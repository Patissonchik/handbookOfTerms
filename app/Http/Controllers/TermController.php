<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
    public function index(Request $request){
        $terms = Term::all();
        $sortBy = $request->input('sort_by', 'name');
        $sortOrder = $request->input('sort_order', 'desc');


        $terms = Term::orderBy($sortBy, $sortOrder)->get();

        return view('terms.index', compact('terms', 'sortBy', 'sortOrder'));
    }

    public function create()
{
    return view('terms.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:50',
        'description' => 'required',
        'complexity' => 'required|integer|min:1|max:5',
    ]);

    $term = new Term($validatedData);
    $term->save();

    return redirect()->route('terms.index')->with('success', 'Термин успешно добавлен');
}

public function edit(Term $term)
{
    return view('terms.edit', compact('term'));
}

public function update(Request $request, Term $term)
{
    $validatedData = $request->validate([
        'name' => 'required|max:50',
        'description' => 'required',
        'complexity' => 'required|integer|min:1|max:5',
    ]);

    $term->fill($validatedData);
    $term->save();

    return redirect()->route('terms.index')->with('success', 'Термин успешно обновлен');
}

public function destroy(Term $term)
{
    $term->delete();
    return redirect()->route('terms.index');
}
}
