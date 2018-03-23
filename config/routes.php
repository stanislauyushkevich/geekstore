<?php

    return [
        'product/([0-9]+)' => 'product/view/$1', //СТРАНИЦА ПРОДУКТА
        'catalog' => 'cataloge/index',// ГЛАВНАЯ СТРАНИЦА КАТАЛОГА
        'category/([0-9]+)/page-([0-9]+)' => 'cataloge/category/$1/$2',
        'category/([0-9]+)' => 'cataloge/category/$1',//СТРАНИЦА КАТЕГОРИЙ
        'cart/add/([0-9]+)' => 'cart/add/$1',
        'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
        'cart/checkout' => 'cart/checkout',
        'cart/delete/([0-9]+)' => 'cart/delete/$1',
        'user/register' => 'user/register',
        'cart' => 'cart/index',
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        'cabinet/edit' => 'cabinet/edit',
        'cabinet' => 'cabinet/index',
        'contacts' => 'site/contact',
        'admin/category/create' => 'adminCategory/create',
        'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
        'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
        'admin/category' => 'adminCategory/index',
        'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
        'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
        'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
        'admin/order' => 'adminOrder/index',
        'admin/product/create' => 'adminProduct/create',
        'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
        'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
        'admin/product' => 'adminProduct/index',
        'admin' => 'admin/index',
        '' => 'site/index',//ГЛАВНПАЯ СТРАНИЦА

    ];