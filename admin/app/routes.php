<?php
$routes = [
    /* Dashboard */
    'index'             => 'Login_Controller@login',
    'dashboard'         => 'Dashboard_Controller@view',
    'dashboard-nt-view' => 'Dashboard_Controller@noTemplateView', //para funcionar no ajax

    /* Noticias */
    'noticias-add'      => 'Noticias_Controller@add',
    'noticias-edit'     => 'Noticias_Controller@edit', //nao esquecer
    'noticias-store'    => 'Noticias_Controller@store',
    'noticias-delete'   => 'Noticias_Controller@delete',
    'noticias-list'     => 'Noticias_Controller@showAll',

    /* Usuários */
    'usuarios-add'      => 'Usuarios_Controller@add',
    'usuarios-store'    => 'Usuarios_Controller@store',
    'usuarios-list'     => 'Usuarios_Controller@showAll',
    'usuarios-edit'     => 'Usuarios_Controller@edit',
    'usuarios-delete'   => 'Usuarios_Controller@delete',

    /* Comentários */
    'comentarios-add'   => 'Comentarios_Controller@add',
    'comentarios-list'  => 'Comentarios_Controller@showAll',
    'comentarios-store' => 'Comentarios_Controller@store',
    'comentarios-edit'  => 'Comentarios_Controller@edit',
    'comentarios-delete'=> 'Comentarios_Controller@delete',

    /* Site */
    'site-comments'     => 'Leak_Controller@comments',
    'site-news'         => 'Leak_Controller@news',

    /* Logout */
    'logout'            => 'Login_Controller@logout',
];