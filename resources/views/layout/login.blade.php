@extends('../layout/base')

@section('body')
    <body class="login">
        @yield('content')
        <?php
        /*
        *   Contenido comentado por evitar la visibilidad
        *   de algunos componetes.
        *   @include('../layout/components/dark-mode-switcher')
        *   @include('../layout/components/main-color-switcher')
        */
        ?>

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
