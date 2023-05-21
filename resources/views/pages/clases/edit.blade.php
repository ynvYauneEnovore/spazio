@extends('../layout/' . $layout)

@section('subhead')
    <title>Editar clase</title>
@endsection

@section('subcontent')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Editar clase</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clases.index') }}">Atrás</a>
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

    <hr>
    <strong>ID:</strong>
    {{ $clase->id }}
    <hr>

    <form action="{{ route('clases.update', $clase->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $clase->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sigla:</strong>
                    <input type="text" name="sigla" value="{{ $clase->sigla }}" class="form-control" placeholder="Sigla">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio 1:</strong>
                    <input type="number" name="precio_1" value="{{ $clase->precio_1 }}" class="form-control" placeholder="Precio 1">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio 2:</strong>
                    <input type="number" name="precio_2" value="{{ $clase->precio_2 }}" class="form-control" placeholder="Precio 2">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio 3:</strong>
                    <input type="number" name="precio_3" value="{{ $clase->precio_3 }}" class="form-control" placeholder="Precio 3">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora de inicio:</strong>
                    <input type="time" name="Horainicio" value="{{ $clase->Horainicio }}" class="form-control" placeholder="Hora de inicio">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora de fin:</strong>
                    <input type="time" name="HoraFin" value="{{ $clase->HoraFin }}" class="form-control" placeholder="Hora de fin">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
