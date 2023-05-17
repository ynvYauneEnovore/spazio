@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Registro de nuevo cliente<hr>
                    <a class="btn btn-success" href="{{ route('clientes.create') }}">Crear
                        <i data-lucide="plus" class="tooltip w-10 h-10 ml-1.5" title="Agrega un usuario"></i>
                    </a>
                </h2>
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

            <th>Sexo</th>

            <th>Celular</th>

            <th>N° Visitas</th>
            <th>Puntos Acumulados</th>
            <th>Última Visita</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $cliente->nombre }}</td>

                <td>{{ $cliente->sexo }}</td>

                <td>{{ $cliente->celular }}</td>

                <td>{{ $cliente->nvisitas }}</td>
                <td>{{ $cliente->puntosAcumulados }}</td>
                <td>{{ $cliente->ultimaVisita }}</td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">

                        <a class="btn btn-warning" href="{{ route('clientes.show', $cliente->id) }}">Ver</a>

                        <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $clientes->links() !!}

@endsection
