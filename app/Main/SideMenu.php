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
                'title' => 'Registros',
                'sub_menu' => [
                    'clientes.index' => [
                        'icon' => 'edit',
                        'route_name' => 'clientes.index',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Usarios'
                    ],
                    'productos.index' => [
                        'icon' => 'list',
                        'route_name' => 'productos.index',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Productos'
                    ],
                    'clases.index' => [
                        'icon' => 'edit',
                        'route_name' => 'clases.index',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Clases'
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
