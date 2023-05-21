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
            <button class="btn btn-primary shadow-md mr-2">+ Agregar</button>
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
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="">
                        </div>

                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $cliente->nombre }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">{{ $cliente->celular }}</div>
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-primary zoom-in tooltip" title="Facebook">
                                <i class="w-6 h-6" data-lucide="eye"></i>
                            </a>
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-primary zoom-in tooltip" title="Twitter">
                            <i data-lucide="check-square" class="w-6 h-6"></i>
                            </a>
                            <a class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-danger zoom-in tooltip" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                <i data-lucide="trash-2" class="w-6 h-6"></i>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <div class="flex text-slate-500 text-xs">
                                <div class="mr-auto">Progress</div>
                                <div>20%</div>
                            </div>
                            <div class="progress h-1 mt-2">
                                <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
                        <button class="btn btn-outline-secondary py-1 px-2">Profile</button>
                    </div>
                </div>
            </div>
            @endforeach
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
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
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
            <!-- END: Users Layout -->
            {!! $clientes->links() !!}
@endsection
