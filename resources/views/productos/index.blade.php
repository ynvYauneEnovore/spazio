@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Registro de nuevo producto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('productos.create') }}">Crear</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $producto->Nombre }}</td>
                <td>{{ $producto->Precio }}</td>
                <td>{{ $producto->Estado }}</td>
                <td>
                    @if ($producto->imagen)
                        <img src="{{ asset('imagenes/' . $producto->imagen) }}" alt="Imagen del producto" width="50">
                    @else
                        Sin imagen
                    @endif
                </td>
                <td>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('productos.show', $producto->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $productos->links() !!}

@endsection
