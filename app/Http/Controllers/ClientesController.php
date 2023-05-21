<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $clientes = Cliente::latest()->paginate(6);

        return view('pages.clientes.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pages.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'codigoCliente' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
            'sexo' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'fechaNacimiento' => 'required',
        ]);

        Cliente::create($request->all());

        return redirect()->route('pages.clientes.index')
            ->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente): View
    {
        return view('pages.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente): View
    {
        return view('pages.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'fechaNacimiento' => 'required',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado exitosamente.');
    }
}
