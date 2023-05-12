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
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Adminitración',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Asistencia'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard-overview-2',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Editar'
                    ],
                ]
            ],


            'servicios' => [
                'icon' => 'book',
                'title' => 'Servicios',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => 'list',
                        'route_name' => 'serviciosClases',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Clases'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => 'list',
                        'route_name' => 'serviciosProductos',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Productos'
                    ],
                ]
            ],





            'devider',
            'crud' => [
                'icon' => 'edit',
                'title' => 'Adminitración de Usuarios',
                'sub_menu' => [
                    'crud-data-list' => [
                        'icon' => '',
                        'route_name' => 'crud-data-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Lista de Usuario'
                    ],
                    'crud-form' => [
                        'icon' => '',
                        'route_name' => 'crud-form',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Form'
                    ],
                    'users-layout-1' => [
                        'icon' => '',
                        'route_name' => 'users-layout-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Layout 1'
                    ],
                ]
            ],
            'profile' => [
                'icon' => 'trello',
                'title' => 'Profile',
                'sub_menu' => [
                    'profile-overview-3' => [
                        'icon' => '',
                        'route_name' => 'profile-overview-3',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Overview 3'
                    ]
                ]
            ],
            'devider',
            'components' => [
                'icon' => 'inbox',
                'title' => 'Casilleros',
                'sub_menu' => [
                    'grid' => [
                        'icon' => '',
                        'title' => 'Grid',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => '',
                                'route_name' => 'regular-table',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => '',
                                'route_name' => 'tabulator',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                ]
            ],
            'devider',
            'components' => [
                'icon' => 'layers',
                'title' => 'Clases',
                'sub_menu' => [
                    'grid' => [
                        'icon' => 'layers',
                        'title' => 'Cursos',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => 'layers',
                                'route_name' => 'regular-table',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => '',
                                'route_name' => 'tabulator',
                                'params' => [
                                    'layout' => 'side-menu'
                                ],
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                ]
            ],
        ];
    }
}
