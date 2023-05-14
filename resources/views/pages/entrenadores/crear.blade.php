@extends('../layout/' . $layout)

@section('subhead')
    <title>Crear</title>
@endsection

@section('subcontent')
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Registro de nuevo Instructor</h2>
                    <div class="intro-x mt-8">
                        <input type="number" class="intro-x login__input form-control py-3 px-4 block" placeholder="Nit">
                        <input type="number" class="intro-x login__input form-control py-3 px-4 block" placeholder="Código de Cliente">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Nombre">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Dirección">
                        <select class="intro-x login__input form-control py-3 px-4 block">
                            <option value="">Seleccionar sexo</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                            <option value="No especificar">No especificar</option>
                        </select>
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Telefono">
                        <input type="tel" class="intro-x login__input form-control py-3 px-4 block" placeholder="Celular" pattern="[0-9]{10}">
                        <input type="email" class="intro-x login__input form-control py-3 px-4 block" placeholder="email">
                        <input type="date" class="intro-x login__input form-control py-3 px-4 block" placeholder="Fecha de Nacimiento">
                        <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Instructor?</label>
                         </div>
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Contraceña">
                        <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                        </div>
                        <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">¿Qué es una contraseña segura?</a>
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation">
                    </div>
                    <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Acepto los terminos de Agymsa</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">privacidad Política </a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-success py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Registrar</button>
                    </div>
                </div>
            </div>
@endsection
