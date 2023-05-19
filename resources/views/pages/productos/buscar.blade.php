@extends('layouts.app')

@section('content')
    <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <form action="{{ route('productos.buscar') }}" method="GET">
            <div class="w-56 relative text-slate-500">
                <input type="text" class="form-control w-56 box pr-10" name="busqueda" placeholder="Buscar...">
                <button type="submit" class="w-4 h-4 absolute my-auto inset-y-0 right-0 mr-3" data-lucide="search"></button>
            </div>
        </form>
    </div>

    <h2 class="intro-y text-lg font-medium mt-10">Resultado de búsqueda</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- Mostrar los resultados de la búsqueda aquí -->
    </div>
@endsection
