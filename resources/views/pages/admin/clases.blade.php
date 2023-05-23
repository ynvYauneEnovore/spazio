@extends('../layout/' . $layout)

@section('subhead')
    <title>Asignación de clases</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Asignar: Clientes -> Clases</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-12">

            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                @foreach (array_slice($fakers, 0, 9) as $faker)
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                                <div class="absolute top-0 left-0 w-full h-full image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ asset('img/' . $faker['foods'][0]['image']) }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">{{ $faker['foods'][0]['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>


        </div>
        <!-- END: Item List -->

    </div>
    <!-- BEGIN: Add Item Modal -->
    <div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">{{ $fakers[0]['foods'][0]['name'] }}</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-4" class="form-label">Crear matricula</label>
                         <!-- BEGIN: Validation Form -->
                     <form class="validate-form">

                            <div class="client-code">
                                <label for="client-code-input" class="form-label">Código de Cliente</label>
                                <input id="client-code-input" type="text" class="form-control" placeholder="Ingrese código de cliente">
                            </div>

                            <div class="input-form mt-3">
                                <label for="start-date" class="form-label">Inicio</label>
                                <input id="start-date" type="date" class="form-control">
                            </div>

                            <div class="input-form mt-3">
                                <label for="end-date" class="form-label">Fin</label>
                                <input id="end-date" type="date" class="form-control">
                            </div>
                            <div class="input-form mt-3">
                                <label for="user-type" class="form-label w-full flex flex-col sm:flex-row">
                                    Instructor
                                </label>
                                <select id="user-type" class="form-control">
                                    <option value="client">Instructor_1</option>
                                    <option value="instructor">Instructor_2</option>
                                    <option value="instructor">Instructor_3</option>
                                    <option value="instructor">Instructor_4</option>
                                    <option value="instructor">Instructor_5</option>
                                    <option value="instructor">Instructor_6</option>
                                </select>
                            </div>
                            <div class="price-pair">
                                <div class="price-input">
                                    <label for="price-input" class="form-label">Precio</label>
                                    <input id="price-input" type="number" min="0" step="0.01" class="form-control" placeholder="Ingrese el precio">
                                </div>
                                <div class="currency-select">
                                    <label for="currency-select" class="form-label">Tipo de moneda</label>
                                    <select id="currency-select" class="form-control">
                                    <option value="usd">BOB</option>
                                    <option value="eur">EUR</option>
                                    <option value="gbp">USD</option>
                                    <!-- Agrega más opciones de moneda según sea necesario -->
                                    </select>
                                </div>
                                </div>

                            <button type="submit" class="btn btn-primary mt-5">Register</button>
                        </form>
                        <!-- END: Validation Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Add Item Modal -->
@endsection
