<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [

                    'inicioAdmin' => [
                        'icon' => 'home',
                        'route_name' => 'inicioAdmin',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Inicio',
                    ],

                        'asistenciasAdmin' => [
                            'icon' => 'edit',
                            'route_name' => 'asistenciasAdmin',
                            'params' => [
                                'layout' => 'side-menu',
                            ],
                            'title' => 'Asistencias'
                        ],

                        'productosAdmin' => [
                            'icon' => 'shopping-bag',
                            'route_name' => 'productosAdmin',
                            'params' => [
                                'layout' => 'side-menu',
                            ],
                            'title' => 'Productos'
                        ],


            'devider',

            'productos' => [
                'icon' => 'shopping-cart',
                'title' => 'Productos',
                'sub_menu' => [
                    'crearProducto' => [
                        'icon' => 'edit',
                        'route_name' => 'crearProducto',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Crear'
                    ],
                    'verProducto' => [
                        'icon' => 'list',
                        'route_name' => 'verProducto',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ver'
                    ],
                    'editarProducto' => [
                        'icon' => 'edit',
                        'route_name' => 'editarProducto',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],

            'sauna' => [
                'icon' => 'wind',
                'title' => 'Sauna',
                'sub_menu' => [
                    'disponibilidadSauna' => [
                        'icon' => 'edit',
                        'route_name' => 'disponibilidadSauna',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Disponibilidad'
                    ],
                    'ingresarSauna' => [
                        'icon' => 'list',
                        'route_name' => 'ingresarSauna',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ingresar'
                    ],
                    'salirSauna' => [
                        'icon' => 'edit',
                        'route_name' => 'salirSauna',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Salir'
                    ],
                ]
            ],

            'resportes' => [
                'icon' => 'book',
                'title' => 'Reportes',
                'sub_menu' => [
                    'ventasReporte' => [
                        'icon' => 'edit',
                        'route_name' => 'ventasReporte',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ventas'
                    ],
                    'asistenciasReporte' => [
                        'icon' => 'list',
                        'route_name' => 'asistenciasReporte',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Asistencias'
                    ],
                    'ingresosReporte' => [
                        'icon' => 'edit',
                        'route_name' => 'ingresosReporte',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ingresos'
                    ],
                ]
            ],

            'soporte' => [
                'icon' => 'alert-triangle',
                'title' => 'Soporte',
                'sub_menu' => [
                    'documentacionSoporte' => [
                        'icon' => 'list',
                        'route_name' => 'documentacionSoporte',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Documentación'
                    ],
                ]
            ],



        ];
    }
}
