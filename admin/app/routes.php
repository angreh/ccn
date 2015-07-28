<?php
$routes = [
    /* Dashboard */
    'index'             => 'Login_Controller@login',
    'dashboard'         => 'Dashboard_Controller@view',
    'dashboard-nt-view' => 'Dashboard_Controller@noTemplateView', //para funcionar no ajax

    /* Noticias */
    'noticias'          => 'Noticias_Controller@view', //nao utilizado
    'noticias-add'      => 'Noticias_Controller@add',
    'noticias-edit'     => 'Noticias_Controller@edit', //nao esquecer
    'noticias-store'    => 'Noticias_Controller@store',
    'noticias-list'     => 'Noticias_Controller@showAll',

    /* Usuários */
    'usuarios-add'      => 'Usuarios_Controller@add',
    'usuarios-store'    => 'Usuarios_Controller@store',
    'usuarios-list'     => 'Usuarios_Controller@showAll',

    /* Comentários */
    'comentarios-add'   => 'Comentarios_Controller@add',
    'comentarios-list'  => 'Comentarios_Controller@showAll',
    'comentarios-store' => 'Comentarios_Controller@store',

    /* Logout */
    'logout'            => 'Login_Controller@logout',
];