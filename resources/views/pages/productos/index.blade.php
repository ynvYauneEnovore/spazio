@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <h2 class="intro-y text-lg font-medium mt-10">Adminitración de Productos</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a class="btn btn-primary shadow-md mr-2" href="{{ route('productos.create') }}">+ Agregar</a>
            <div class="hidden md:block mx-auto text-slate-500">

            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form action="" method="GET">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" name="busqueda" placeholder="Buscar...">
                        <button type="submit" class="w-4 h-4 absolute my-auto inset-y-0 right-0 mr-3" data-lucide="search"></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">PERFIL</th>
                        <th class="whitespace-nowrap">NOMBRE</th>
                        <th class="text-center whitespace-nowrap">STOCK</th>
                        <th class="text-center whitespace-nowrap">ESTADO</th>
                        <th class="text-center whitespace-nowrap">ACCIÓN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="intro-x">
                            <td class="w-60">
                                <div class="flex">
                                    <div class="w-30 h-30 zoom-in">
                                        @if($producto->imagen && file_exists(public_path('imagenes/' . $producto->imagen)))
                                            <img src="{{ asset('imagenes/' . $producto->imagen) }}" alt="" width="100" data-action="zoom">
                                        @else
                                            <img src="{{ asset('img/producto.png') }}" alt="50" width="50">
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $producto->Nombre }}</a>
                            </td>
                            <td class="text-center">{{ $producto->stock }}</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center">
                                    @if ($producto->Estado == 1)
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2 text-success"></i>
                                    @else
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2 text-danger"></i>
                                    @endif
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3 text-primary" href="{{ route('productos.show', $producto->id) }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1 text-primary"></i> Ver
                                    </a>
                                    <a class="flex items-center mr-3 text-primary" href="{{ route('productos.edit', $producto->id) }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1 text-primary"></i> Editar
                                    </a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            <button type="submit" class="flex items-center mr-3 text-danger">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-2 text-danger"></i> Eliminar
                            </button>
                            @csrf
                            @method('DELETE')
                        </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->

    {!! $productos->links() !!}
@endsection
