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
    public function inicioAdmin()
    {
        return view('pages/admin/inicio', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);
    }

       /**
     * Adminitración de la asistencias.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function asistenciasAdmin()
    {
        return view('pages/admin/asistencias');
    }


         /**
     * Adminitración de la asistencias.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productosAdmin()
    {
        return view('pages/admin/productos');
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
     * Crear las clases
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearClases()
    {
        return view('pages/clases/crear');
    }
       /**
     * Ver las clases.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verClases()
    {
        return view('pages/clases/ver');
    }
       /**
     * Editar clases.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarClases()
    {
        return view('pages/clases/editar');
    }

                 /**
     * Asignar el casillero.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function asignarCasilleros()
    {
        return view('pages/casilleros/asignar');
    }
       /**
     * Ver el casillero.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verCasilleros()
    {
        return view('pages/casilleros/ver');
    }
       /**
     * Liberar el casillero.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function liberarCasilleros()
    {
        return view('pages/casilleros/liberar');
    }


                   /**
     * Editar el producto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editarProducto()
    {
        return view('pages/productos/editar');
    }
       /**
     * Ver el producto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verProducto()
    {
        return view('pages/productos/ver');
    }
       /**
     * Creación del producto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearProducto()
    {
        return view('pages/productos/crear');
    }

                    /**
     * ingreso del sauna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ingresarSauna()
    {
        return view('pages/sauna/ingresar');
    }
       /**
     * Salida del sauna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salirSauna()
    {
        return view('pages/sauna/salir');
    }
       /**
     * Estado del sauna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function disponibilidadSauna()
    {
        return view('pages/sauna/disponibilidad');
    }

                     /**
     * Vista de los reportes de ventas
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ventasReporte()
    {
        return view('pages/reporte/ventas');
    }
       /**
     * Vista de los reportes de asistencias
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function asistenciasReporte()
    {
        return view('pages/reporte/asistencias');
    }
       /**
     * Vista de los reportes de ingresos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ingresosReporte()
    {
        return view('pages/reporte/ingresos');
    }

          /**
     * Documentación.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function documentacionSoporte()
    {
        return view('pages/soporte/documentacion');
    }
}
