@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Editar cliente</h2>
            </div>
            <div class="pull-right"><br>
                <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Atras</a>
            </div><br>
        </div>
    </div>

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
                <strong>ID:</strong>
                {{ $cliente->id }}
<hr>
    <form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nombre:</strong>
                    <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control" placeholder="nombre">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>direccion:</strong>
                    <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="form-control" placeholder="direccion">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>telefono:</strong>
                    <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control" placeholder="telefono">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>celular:</strong>
                    <input type="text" name="celular" value="{{ $cliente->celular }}" class="form-control" placeholder="celular">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <input type="text" name="email" value="{{ $cliente->email }}" class="form-control" placeholder="email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>fechaNacimiento:</strong>
                    <input type="date" name="fechaNacimiento" value="{{ $cliente->fechaNacimiento }}" class="form-control" placeholder="fechaNacimiento">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>

    </form>
@endsection
