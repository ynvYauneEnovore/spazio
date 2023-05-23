@extends('../layout/' . $layout)

@section('subhead')
    <title>Editar Usuario</title>
@endsection

@section('subcontent')
    {{-- Encabezado --}}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Editar usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientes.index') }}">Atras</a>
            </div>
        </div>
    </div>

    {{-- Mostrar mensajes de error --}}
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

    <hr>

    {{-- Mostrar ID del cliente --}}
    <strong>ID:</strong>
    {{ $cliente->id }}

    <hr>

    {{-- Formulario de edición --}}
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            {{-- Campo: nombre --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

            {{-- Campo: dirección --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dirección:</strong>
                    <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="form-control" placeholder="Dirección">
                </div>
            </div>

            {{-- Campo: teléfono --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Teléfono:</strong>
                    <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control" placeholder="Teléfono">
                </div>
            </div>

            {{-- Campo: celular --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Celular:</strong>
                    <input type="text" name="celular" value="{{ $cliente->celular }}" class="form-control" placeholder="Celular">
                </div>
            </div>

            {{-- Campo: email --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $cliente->email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            {{-- Campo: fecha de nacimiento --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="fechaNacimiento" value="{{ $cliente->fechaNacimiento }}" class="form-control" placeholder="Fecha de nacimiento">
                </div>
            </div>

            {{-- Campo: imagen --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagen:</strong>
                    <input type="file" name="imagenPerfil" class="form-control-file">
                </div>
            </div>

            {{-- Botón para actualizar --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
