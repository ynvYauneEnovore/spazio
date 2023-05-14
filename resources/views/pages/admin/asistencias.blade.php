@extends('../layout/' . $layout)

@section('subhead')
    <title>Asistencia</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">



                  <!-- BEGIN: General Report -->

                  <div class="col-span-12 mt-8">
                  <div class="mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                        <span>
                            Ingreso de cliente

                            <button class="btn btn-dark mr-1 mb-2 text-white"> Entrada <i data-loading-icon="circles" data-color="white" class="w-4 h-4 ml-2"></i> </button>
                            <button class="btn btn-dark mr-1 mb-2 text-white"> Salida <i data-loading-icon="hearts" data-color="white" class="w-4 h-4 ml-2"></i> </button>
                            <button class="btn btn-rounded-dark mr-1 mb-2 text-white"> Compra <i data-loading-icon="grid" data-color="white" class="w-4 h-4 ml-2"></i> </button>
                        </span>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
