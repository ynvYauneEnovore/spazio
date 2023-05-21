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
        {!! $productos->links() !!}
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
                                        <img src="{{ asset('imagenes/' . $producto->imagen) }}" alt="" width="100">
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
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Eliminar
                                    </a>
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
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">¿Estás seguro?</div>
                        <div class="text-slate-500 mt-2">¿Realmente deseas eliminar este registro?<br>Este proceso no se puede deshacer.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancelar</button>
                            <button type="submit" class="btn btn-danger w-24">Eliminar</button>
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
    {!! $productos->links() !!}
@endsection
