@extends('../layout/' . $layout)

@section('subhead')
    <title>Administración de Casilleros</title>
@endsection

@section('subcontent')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h2 class="intro-y text-lg font-medium mt-10">Administración de Casilleros</h2>

    <a class="btn btn-primary" href="{{ route('inicioAdmin') }}">Atrás</a>
    <input type="text" class="form-control w-24 box pr-10" placeholder="Buscar...">
    <a class="btn btn-primary" href="{{ route('clases.index') }}">Ir</a>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <!-- BEGIN: Casilleros Layout -->
        @foreach ($casilleros as $casillero)
    <div class="intro-y col-span-12 md:col-span-3">
        <div class="box">
            <div class="flex flex-col lg:flex-row items-center p-3 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="lg:ml-2 lg:mr-auto text-sm text-center lg:text-left mt-2 lg:mt-0">
                    ID: {{ $casillero->id }}<br>
                    Disponible: {{ $casillero->disponible ? 'SI' : 'NO' }}
                </div>
                <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-2 lg:mt-0">
                    <form action="{{ route('casilleros.update', $casillero->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="disponible" value="{{ $casillero->disponible ? 0 : 1 }}">
                        <button type="submit" class="w-6 h-6 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-primary zoom-in tooltip" title="{{ $casillero->disponible ? 'Marcar como no disponible' : 'Marcar como disponible' }}">
                            <i class="w-16 h-16 {{ $casillero->disponible ? 'text-green-500' : 'text-red-500' }}" data-lucide="{{ $casillero->disponible ? 'check' : 'slash' }}"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach



@endsection
