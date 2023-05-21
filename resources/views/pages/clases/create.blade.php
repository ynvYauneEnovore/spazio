@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Crear nuevo cliente</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Atras</a>
        </div>
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

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nit:</strong>
                <input type="number" name="nit" class="form-control" placeholder="nit">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>codigoCliente:</strong>
                <input type="number" name="codigoCliente" class="form-control" placeholder="codigoCliente">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>direccion:</strong>
                <input type="text" name="direccion" class="form-control" placeholder="direccion">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>sexo:</strong>
                <input type="text" name="sexo" class="form-control" placeholder="sexo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>telefono:</strong>
                <input type="number" name="telefono" class="form-control" placeholder="telefono">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>celular:</strong>
                <input type="number" name="celular" class="form-control" placeholder="celular">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fechaNacimiento:</strong>
                <input type="date" name="fechaNacimiento" class="form-control" placeholder="fechaNacimiento">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

</form>
@endsection
