@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear Usuario</title>
@endsection

@section('subcontent')
    {{-- Encabezado --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Crear nuevo usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Atras</a>
            </div>
        </div>
    </div>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con tus datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario para crear un nuevo cliente --}}
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            {{-- Campo: NIT --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIT:</strong>
                    <input type="number" name="nit" class="form-control" placeholder="Ingrese el NIT">
                </div>
            </div>

            {{-- Campo: Código de cliente --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código de cliente:</strong>
                    <input type="number" name="codigoCliente" class="form-control" placeholder="Ingrese el código de cliente">
                </div>
            </div>

            {{-- Campo: Nombre --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del cliente">
                </div>
            </div>

            {{-- Campo: Dirección --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="Ingrese la dirección del cliente">
                </div>
            </div>

            {{-- Campo: Sexo --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sexo:</strong>
                    <input type="text" name="sexo" class="form-control" placeholder="Ingrese el sexo del cliente">
                </div>
            </div>

            {{-- Campo: Teléfono --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    <input type="number" name="telefono" class="form-control" placeholder="Ingrese el teléfono del cliente">
                </div>
            </div>

            {{-- Campo: Celular --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Celular:</strong>
                    <input type="number" name="celular" class="form-control" placeholder="Ingrese el celular del cliente">
                </div>
            </div>

            {{-- Campo: Email --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Ingrese el email del cliente">
                </div>
            </div>

            {{-- Campo: Fecha de nacimiento --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="fechaNacimiento" class="form-control" placeholder="Ingrese la fecha de nacimiento del cliente">
                </div>
            </div>

            {{-- Campo: Foto --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <input type="file" name="imagenPerfil" class="form-control-file">
                </div>
            </div>

            {{-- Botón: Registrar --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>
@endsection
