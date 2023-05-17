@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Asistencia de clientes</h2>
                    <div class="box p-5 mt-6 bg-success intro-x">
                        <div class="flex flex-wrap gap-2">
                            <div class="mr-auto">
                                <div class="text-white text-opacity-70 dark:text-slate-300 flex items-center leading-3">
                                    54
                                    <i data-lucide="alert-circle" class="tooltip w-5 h-5 ml-1.5" title="Número de entrada del día"></i>
                                </div>
                                <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
                                    <span class="absolute text-xl top-0 left-0 -mt-1.5">ENTRADA</span>
                                </div>
                            </div>
                            <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-0" class="btn btn-dark">
                                <i data-lucide="log-in" class="w-20 h-20"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="box p-5 mt-6 bg-danger intro-x">
                        <div class="flex flex-wrap gap-2">
                            <div class="mr-auto">
                                <div class="text-white text-opacity-70 dark:text-slate-300 flex items-center leading-3">
                                    18
                                    <i data-lucide="alert-circle" class="tooltip w-5 h-5 ml-1.5" title="Número de salidas del día"></i>
                                </div>
                                <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
                                    <span class="absolute text-xl top-0 left-0 -mt-1.5">SALIDA</span>
                                </div>
                            </div>
                            <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-1" class="btn btn-dark">
                                <i data-lucide="log-out" class="w-20 h-20"></i>
                            </a>
                            </div>
                        </div>
                    </div>

 <!-- BEGIN: Modal Content -->
 <div id="static-backdrop-modal-preview-0" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body px-5 py-10">
                 <div class="text-center">
                 <div class="mb-5">REGISTRO DE ENTRADA</div>
                     <!-- BEGIN: Validation Form -->
 <form class="validate-form">
     <div class="input-form"> <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Nombre <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Nombre del cliente</span> </label> <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="Yovan Yaune" minlength="2"> </div>
     <div class="input-form"> <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Id <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Id del cliente</span> </label> <input id="validation-form-1" type="number" name="name" class="form-control" placeholder="00012154" minlength="2" required> </div>
     <button type="submit" class="btn btn-primary mt-5">Register</button>
     <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Cerrar</button>
 </form> <!-- END: Validation Form -->
 <!-- BEGIN: Success Notification Content -->
 <div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success" data-lucide="check-circle"></i>
     <div class="ml-4 mr-4">
         <div class="font-medium">Registro existoso...</div>
         <div class="text-slate-500 mt-1"> Verifica las asistencias del usuarios. </div>
     </div>
 </div> <!-- END: Success Notification Content -->
 <!-- BEGIN: Failed Notification Content -->
 <div id="failed-notification-content" class="toastify-content hidden flex"> <i class="text-danger" data-lucide="x-circle"></i>
     <div class="ml-4 mr-4">
     <div class="font-medium">Registro fallido. Se requiere algunos datos del cliente, el nombre no es obligatorio.</div>
<div class="text-slate-500 mt-1">Verifica el formulario.</div>

     </div>
 </div> <!-- END: Failed Notification Content -->
 <br>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- END: Modal Content -->
 <!-- BEGIN: Modal Content -->
 <div id="static-backdrop-modal-preview-1" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body px-5 py-10">
                 <div class="text-center">
                     <div class="mb-5">REGISTRO DE SALIDA</div>
                     <!-- BEGIN: Validation Form -->
 <form class="validate-form">
     <div class="input-form"> <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Nombre <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Nombre del cliente</span> </label> <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="Yovan Yaune" minlength="2"> </div>
     <div class="input-form"> <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Id <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Id del cliente</span> </label> <input id="validation-form-1" type="number" name="name" class="form-control" placeholder="00012154" minlength="2" required> </div>
     <button type="submit" class="btn btn-primary mt-5">Register</button>
     <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Cerrar</button>
 </form> <!-- END: Validation Form -->
 <!-- BEGIN: Success Notification Content -->
 <div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success" data-lucide="check-circle"></i>
     <div class="ml-4 mr-4">
     <div class="font-medium">Registro existoso...</div>
         <div class="text-slate-500 mt-1"> Verifica las asistencias del usuarios. </div>
     </div>
 </div> <!-- END: Success Notification Content -->
 <!-- BEGIN: Failed Notification Content -->
 <div id="failed-notification-content" class="toastify-content hidden flex"> <i class="text-danger" data-lucide="x-circle"></i>
     <div class="ml-4 mr-4">
     <div class="font-medium">Registro fallido. Se requiere algunos datos del cliente, el nombre no es obligatorio.</div>
<div class="text-slate-500 mt-1">Verifica el formulario.</div>

     </div>
 </div> <!-- END: Failed Notification Content -->
 <br>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- END: Modal Content -->
                </div>
            </div>
@endsection
