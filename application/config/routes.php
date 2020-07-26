<?php

return array(

    'admin/post/delete/([0-9]+)' => 'admin/post/delete/$1',
    'admin/post/update/([0-9]+)' => 'admin/post/update/$1',
    'admin/post/create' => 'admin/post/create',
    'admin/post' => 'admin/post/index',

    'admin/country/delete/([0-9]+)' => 'admin/country/delete/$1',
    'admin/country/update/([0-9]+)' => 'admin/country/update/$1',
    'admin/country/create' => 'admin/country/create',
    'admin/country' => 'admin/country/index',

    'admin/sport/delete/([0-9]+)' => 'admin/sport/delete/$1',
    'admin/sport/update/([0-9]+)' => 'admin/sport/update/$1',
    'admin/sport/create' => 'admin/sport/create',
    'admin/sport' => 'admin/sport/index',
    'admin' => 'admin/dashboard/index',

    'login' => 'user/login',
    'logout' => 'user/logout',

    'category/([a-zA-Z0-9\-\_]+)/page/([0-9]+)' => 'category/index/$1',
    'category/([a-zA-Z0-9\-\_]+)' => 'category/index/$1',
    '([a-zA-Z0-9\-\_]+)' => 'site/view/$1',
    '' => 'site/index',
);