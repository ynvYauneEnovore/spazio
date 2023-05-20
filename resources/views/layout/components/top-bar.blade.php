<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        Bienvenido:
    </nav>
    <!-- END: Breadcrumb -->
    <ul class="dropdown-content bg-primary text-white">
    <li class="p-2">&nbsp;
                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-xs text-dark mt-0.5 dark:text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </li>
</ul>

    <!-- BEGIN: Account Menu -->&nbsp;&nbsp;&nbsp;
    <div class="intro-x dropdown w-24 h-24">
        <div class="dropdown-toggle w-24 h-24 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="Midone - HTML Admin Template" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> Perfil
                    </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Agregar cuenta
                    </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i>Olividaste tu contraceña?
                    </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Ayuda
                    </a>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
