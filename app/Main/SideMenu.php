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

                    'dashboard-overview-1' => [
                        'icon' => 'home',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Inicio',
                    ],

            'asiServices' => [
                'icon' => 'edit',
                'route_name' => 'asiServices',
                'params' => [
                    'layout' => 'side-menu',
                ],
                'title' => 'Asistencias'
            ],


            'devider',

            'clientes' => [
                'icon' => 'user-check',
                'title' => 'Clientes',
                'sub_menu' => [
                    'crearClientes' => [
                        'icon' => 'edit',
                        'route_name' => 'crearClientes',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Crear'
                    ],
                    'verClientes' => [
                        'icon' => 'list',
                        'route_name' => 'verClientes',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ver'
                    ],
                    'editarClientes' => [
                        'icon' => 'edit',
                        'route_name' => 'editarClientes',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],


            'entrenadores' => [
                'icon' => 'user-check',
                'title' => 'Entrenadores',
                'sub_menu' => [
                    'crearEntrenadores' => [
                        'icon' => 'edit',
                        'route_name' => 'crearEntrenadores',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Crear'
                    ],
                    'verEntrenadores' => [
                        'icon' => 'list',
                        'route_name' => 'verEntrenadores',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ver'
                    ],
                    'editarEntrenadores' => [
                        'icon' => 'edit',
                        'route_name' => 'editarEntrenadores',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],


            'clases' => [
                'icon' => 'user-check',
                'title' => 'Clases',
                'sub_menu' => [
                    'crearClases' => [
                        'icon' => 'edit',
                        'route_name' => 'crearClases',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Crear'
                    ],
                    'verClases' => [
                        'icon' => 'list',
                        'route_name' => 'verClases',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ver'
                    ],
                    'editarClases' => [
                        'icon' => 'edit',
                        'route_name' => 'editarClases',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],


            'casilleros' => [
                'icon' => 'user-check',
                'title' => 'Casilleros',
                'sub_menu' => [
                    'crearCasilleros' => [
                        'icon' => 'edit',
                        'route_name' => 'crearCasilleros',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Crear'
                    ],
                    'verCasilleros' => [
                        'icon' => 'list',
                        'route_name' => 'verCasilleros',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Ver'
                    ],
                    'editarCasilleros' => [
                        'icon' => 'edit',
                        'route_name' => 'editarCasilleros',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],

        ];
    }
}
