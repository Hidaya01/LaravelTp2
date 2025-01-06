<?php

namespace App\Http\Controllers;

use App\Models\TacheModel;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $taches = TacheModel::where('titre', 'like', '%' . $search . '%')
                                ->orWhere('description', 'like', '%' . $search . '%')
                                ->get();
        } else {
            $taches = TacheModel::all();
        }

        return view('tache.index', compact('taches'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tache.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'nullable',
            'completed' => 'boolean',
        ]);

        TacheModel::create($request->all());

        return redirect()->route('tache.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(TacheModel $tache)
    {
        return view('Tache.show', compact('tache')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TacheModel $tache)
    {
        return view('Tache.edit', compact('tache')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TacheModel $tache)
    {
        $request->validate([
            'titre' => 'required|max:255',
            'description' => 'nullable',
            'completed' => 'boolean',
        ]);

        $tache->update($request->all());

        return redirect()->route('tache.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TacheModel $tache)
    {
        $tache->delete();

        return redirect()->route('tache.index'); 
    }
}
