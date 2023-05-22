<?php

namespace App\Http\Controllers;

use App\Models\Casillero;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CasillerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $casilleros = Casillero::latest()->paginate(100);

        return view('pages.casilleros.index', compact('casilleros'))
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
            'precio_2' => 'nullable',
            'precio_3' => 'nullable',
            'Horainicio' => 'nullable',
            'horafin' => 'nullable',
            'estado' => 'nullable',
        ]);

        Clases::create($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clases $clase): View
    {
        return view('pages.clases.show', compact('clase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clases $clase): View
    {
        return view('pages.clases.edit', compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Casillero $casillero): RedirectResponse
{
    $request->validate([
        'disponible' => 'required|boolean',
    ]);

    $casillero->update([
        'disponible' => $request->disponible,
    ]);

    return redirect()->route('casilleros.index')
        ->with('primary', 'Estado del casillero actualizado exitosamente');
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
