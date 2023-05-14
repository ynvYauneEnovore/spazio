<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview1()
    {
        return view('pages/admin/asistencia', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);
    }

    /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview2()
    {
        return view('pages/admin/editar');
    }

    /**
     * Adminitración general: sub-menu:reporte.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview3()
    {
        return view('pages/admin/reporte');
    }


    /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function serviciosProductos()
    {
        return view('pages/productos/productos');
    }

        /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function serviciosClases()
    {
        return view('pages/productos/clases');
    }

      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function preguntaDocumentacion()
    {
        return view('pages/preguntas/documentacion');
    }

      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function preguntaContactanos()
    {
        return view('pages/preguntas/contactanos');
    }

      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function preguntaFaq()
    {
        return view('pages/preguntas/pregunta');
    }


      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gestionBalance()
    {
        return view('pages/gestion/balance');
    }


      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gestionContabilidad()
    {
        return view('pages/gestion/contabilidad');
    }


      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gestionFinanzas()
    {
        return view('pages/gestion/finanzas');
    }


      /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gestionInformes()
    {
        return view('pages/gestion/informes');
    }

       /**
     * Adminitración general: sub-menu:editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function asiServices()
    {
        return view('pages/admin/asi');
    }

       /**
     * Creación del cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearClientes()
    {
        return view('pages/clientes/crear');
    }
       /**
     * Ver el cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verClientes()
    {
        return view('pages/clientes/ver');
    }
       /**
     * Editar el cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarClientes()
    {
        return view('pages/clientes/editar');
    }

           /**
     * Creación del entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearEntrenadores()
    {
        return view('pages/entrenadores/crear');
    }
       /**
     * Ver el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verEntrenadores()
    {
        return view('pages/entrenadores/ver');
    }
       /**
     * Editar el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarEntrenadores()
    {
        return view('pages/entrenadores/editar');
    }

             /**
     * Creación del entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearClases()
    {
        return view('pages/clases/crear');
    }
       /**
     * Ver el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verClases()
    {
        return view('pages/clases/ver');
    }
       /**
     * Editar el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarClases()
    {
        return view('pages/clases/editar');
    }

                 /**
     * Creación del entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearCasilleros()
    {
        return view('pages/casilleros/crear');
    }
       /**
     * Ver el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verCasilleros()
    {
        return view('pages/casilleros/ver');
    }
       /**
     * Editar el entrenador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarCasilleros()
    {
        return view('pages/casilleros/editar');
    }
}
