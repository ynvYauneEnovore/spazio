@extends('../layout/' . $layout)

@section('subhead')
    <title>Detalles del Producto</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
<h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Detalles del Producto</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">

                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('imagenes/' . $producto->imagen) }}">

                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-24 truncate sm:whitespace-normal font-medium">NOMBRE: <br> {{ $producto->Nombre }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Detalles</div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        ESTADO:&emsp;
                        <div class="flex items-center justify-center">
                                    @if ($producto->Estado == 1)
                                        <i data-lucide="check-circle" class="w-12 h-12 mr-2 text-success"></i>
                                    @else
                                        <i data-lucide="x-octagon" class="w-12 h-12 mr-2 text-danger"></i>
                                    @endif
                                </div>
                    </div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-lucide="dollar-sign" class="w-4 h-4 mr-2"></i>PRECIO: {{ $producto->Precio }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i>ID: {{ $producto->id }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i>DESCRIPCIÓN: {{ $producto->Descripcion }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Registros de Productos</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                MÍNIMO: {{ $producto->min }}
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                MÁXIMO: {{ $producto->max }}
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                STOCK: {{ $producto->stock }}
                </div>
                <div class="font-medium text-center lg:text-left lg:mt-5">Datos de Creación</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                CREADO EL: {{ $producto->created_at }}
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                ACTUALIZADO EL: {{ $producto->updated_at }}
                </div>
            </div>
        </div>
        <div class="pull-right"><br>
                <a class="btn btn-primary" href="{{ route('productos.index') }}"> Atras</a>
            </div><br>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >

        </ul>
    </div>
@endsection
