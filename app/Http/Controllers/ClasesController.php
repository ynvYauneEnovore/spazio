<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ClasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $clases = Clases::latest()->paginate(10);

        return view('pages.clases.index', compact('clases'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.clases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'sigla' => 'required',
            'precio_1' => 'required',
            'precio_2' => 'required',
            'precio_3' => 'required',
            'Horainicio' => 'nullable',
            'horafin' => 'nullable',
            'estado' => 'nullable',
        ]);

        Clase::create($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clase $clase): View
    {
        return view('pages.clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clase $clase): View
    {
        return view('pages.clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clase $clase): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'sigla' => 'required',
            'precio_1' => 'required',
            'precio_2' => 'required',
            'precio_3' => 'required',
            'Horainicio' => 'nullable',
            'horafin' => 'nullable',
            'estado' => 'nullable',
        ]);

        $clase->update($request->all());

        return redirect()->route('clases.index')
            ->with('primary', 'Clase actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clases $clase): RedirectResponse
    {
        $clase->delete();

        return redirect()->route('clases.index')
            ->with('success', 'Clase eliminada exitosamente');
    }
}
