@extends('../layout/' . $layout)

@section('subhead')
    <title>admin_user</title>
@endsection

@section('subcontent')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<h2 class="intro-y text-lg font-medium mt-10">Adminitración de Usuarios</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a class="btn btn-primary shadow-md mr-2" href="{{ route('clientes.create') }}">+ Agregar</a>
            <div class="hidden md:block mx-auto text-slate-500">
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($clientes as $cliente)
        <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">

                    <div class="w-24 h-24 lg:w-32 lg:h-32 image-fit lg:mr-1">
                        @if($cliente->imagenPerfil && file_exists(public_path('imagenes/' . $cliente->imagenPerfil)))
                            <img class="rounded-full" src="{{ asset('imagenes/' . $cliente->imagenPerfil) }}">
                        @else
                            <img class="rounded-full" src="{{ asset('img/usuario.png') }}" width="50">
                        @endif
                    </div>


                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            NOMBRE: {{ $cliente->nombre }}<BR>
                            CÓDIGO CLIENTE: {{ $cliente->codigoCliente }}
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-primary zoom-in tooltip" title="Ver detalle">
                                <i class="w-6 h-6" data-lucide="eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-primary zoom-in tooltip" title="Editar datos">
                            <i data-lucide="check-square" class="w-6 h-6"></i>
                            </a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                            <button type="submit" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-danger zoom-in tooltip" title="Eliminar">
                            <i data-lucide="trash-2" class="w-6 h-6"></i>
                            </button>
                            @csrf
                            @method('DELETE')
                        </form>
                        </div>
                    </div>
                    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <div class="flex text-slate-500 text-xs">
                                <div class="mr-auto">Asistencias</div>
                                <div>20%</div>
                            </div>
                            <div class="progress h-1 mt-2">
                                <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary py-1 px-2 mr-2">Contactar</button>
                        <button class="btn btn-outline-secondary py-1 px-2">Perfil</button>
                    </div>
                </div>
            </div>
            @endforeach
            {!! $clientes->links() !!}
@endsection
