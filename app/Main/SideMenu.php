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
                'icon' => 'edit',
                'title' => 'Adminitración',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => 'list',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Asistencia',
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
                'icon' => 'shopping-cart
                ',
                'title' => 'Servicios',
                'sub_menu' => [
                    'serviciosClases' => [
                        'icon' => 'edit',
                        'route_name' => 'serviciosClases',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Clases'
                    ],
                    'serviciosProductos' => [
                        'icon' => 'list',
                        'route_name' => 'serviciosProductos',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Productos'
                    ],
                ]
            ],


            'gestion' => [
                'icon' => 'dollar-sign',
                'title' => 'Gestión financiera',
                'sub_menu' => [
                    'gestionBalance' => [
                        'icon' => 'edit',
                        'route_name' => 'gestionBalance',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Balances'
                    ],
                    'gestionContabilidad' => [
                        'icon' => 'list',
                        'route_name' => 'gestionContabilidad',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Contabilidad'
                    ],
                    'gestionFinanzas' => [
                        'icon' => 'list',
                        'route_name' => 'gestionFinanzas',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Finanzas'
                    ],
                    'gestionInformes' => [
                        'icon' => 'list',
                        'route_name' => 'gestionInformes',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Informes contables'
                    ],
                ]
            ],

            'devider',

            'preguntas' => [
                'icon' => 'alert-triangle',
                'title' => 'Información',
                'sub_menu' => [
                    'preguntaDocumentacion' => [
                        'icon' => 'edit',
                        'route_name' => 'preguntaDocumentacion',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Documentación'
                    ],
                    'preguntaFaq' => [
                        'icon' => 'list',
                        'route_name' => 'preguntaFaq',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'FAQ'
                    ],
                    'preguntaContactanos' => [
                        'icon' => 'list',
                        'route_name' => 'preguntaContactanos',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Contáctos'
                    ],
                ]
            ],

        ];
    }
}
