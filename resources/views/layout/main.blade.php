@extends('../layout/base')

@section('body')
    <body class="py-5">
        @yield('content')
        <?php
        /*
        *   Contenido comentado por evitar la visibilidad
        *   de algunos componetes.
        *   @include('../layout/components/dark-mode-switcher')
        *   @include('../layout/components/main-color-switcher')
        */
        ?>

        @include('../layout/components/dark-mode-switcher')

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
