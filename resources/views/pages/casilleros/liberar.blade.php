@extends('../layout/' . $layout)

@section('subhead')
    <title>Liberar</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">



                  <!-- BEGIN: General Report -->

                  <div class="col-span-12 mt-8">
                  <div class="mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-success text-white flex items-center mb-6" role="alert">
                        <span>
                           Liberar
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
