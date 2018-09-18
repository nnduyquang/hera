<?php


Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('/dich-vu/', function () {
    return view('frontend.services.index');
});

Route::get('/uu-dai/', function () {
    return view('frontend.uudai.index');
});

Route::get('/dat-tiec/', function () {
    return view('frontend.contact.index');
});
Route::get('/thuc-don/', function () {
    return view('frontend.thucdon.index');
});

Route::get('/lien-he/', function () {
    return view('frontend.lienhe.index');
});

Route::get('/uu-dai/chuong-trinh-uu-dai.html', function () {
    return view('frontend.uudai-details.index');
});

Route::get('/hinh-anh/', function () {
    return view('frontend.gallery.index');
});

Route::get('/tin-tuc/', function () {
    return view('frontend.tintuc.index');
});

Route::get('/dich-vu/dich-vu.html', function () {
    return view('frontend.service-details.index');
});

Route::post('/tim-kiem','FrontendController@getSearch')->name('search');



Route::get('/admin/sml_login', 'AuthController@checklogin');
Route::post('sml_login', 'AuthController@login')->name('login');
Route::get('/admin/sml_logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('sml_admin/dashboard', function () {
        return view('backend.admin.dashboard.index');
    })->name('dashboard');
    Route::resource('sml_admin/users', 'UserController');
    //ROLE
    Route::get('sml_admin/roles', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::post('sml_admin/roles/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
    Route::get('sml_admin/roles/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
    Route::patch('sml_admin/roles/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
    Route::delete('sml_admin/roles/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    Route::get('sml_admin/roles/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);

    //PAGE
    Route::get('sml_admin/page', ['as' => 'page.index', 'uses' => 'PageController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/page/create', ['as' => 'page.store', 'uses' => 'PageController@store', 'middleware' => ['permission:page-create']]);
    Route::post('sml_admin/page', ['as' => 'page.search', 'uses' => 'PageController@search']);
    Route::get('sml_admin/page/create', ['as' => 'page.create', 'uses' => 'PageController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PageController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/page/{id}', ['as' => 'page.update', 'uses' => 'PageController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/page/{id}', ['as' => 'page.destroy', 'uses' => 'PageController@destroy', 'middleware' => ['permission:page-delete']]);

    //CATEGORY POST
    Route::get('sml_admin/danh-muc-bai-viet', ['as' => 'categorypost.index', 'uses' => 'CategoryPostController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.store', 'uses' => 'CategoryPostController@store', 'middleware' => ['permission:page-create']]);
//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);
    Route::get('sml_admin/danh-muc-bai-viet/create', ['as' => 'categorypost.create', 'uses' => 'CategoryPostController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/danh-muc-bai-viet/{id}/edit', ['as' => 'categorypost.edit', 'uses' => 'CategoryPostController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.update', 'uses' => 'CategoryPostController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/danh-muc-bai-viet/{id}', ['as' => 'categorypost.destroy', 'uses' => 'CategoryPostController@destroy', 'middleware' => ['permission:page-delete']]);

    //SERVICE
    Route::get('sml_admin/dich-vu', ['as' => 'service.index', 'uses' => 'PostController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','service');
    Route::post('sml_admin/dich-vu/create', ['as' => 'service.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','service');
    Route::post('sml_admin/dich-vu', ['as' => 'service.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/dich-vu/create', ['as' => 'service.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','service');
    Route::get('sml_admin/dich-vu/{id}/edit', ['as' => 'service.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','service');
    Route::patch('sml_admin/dich-vu/{id}', ['as' => 'service.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','service');
    Route::delete('sml_admin/dich-vu/{id}', ['as' => 'service.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','service');

    //SET MENU
    Route::get('sml_admin/thuc-don', ['as' => 'setmenu.index', 'uses' => 'PostController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','setmenu');
    Route::post('sml_admin/thuc-don/create', ['as' => 'setmenu.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','setmenu');
    Route::post('sml_admin/thuc-don', ['as' => 'setmenu.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/thuc-don/create', ['as' => 'setmenu.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','setmenu');
    Route::get('sml_admin/thuc-don/{id}/edit', ['as' => 'setmenu.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','setmenu');
    Route::patch('sml_admin/thuc-don/{id}', ['as' => 'setmenu.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','setmenu');
    Route::delete('sml_admin/thuc-don/{id}', ['as' => 'setmenu.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','setmenu');

    //FAVOR
    Route::get('sml_admin/uu-dai', ['as' => 'favor.index', 'uses' => 'PostController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','favor');
    Route::post('sml_admin/uu-dai/create', ['as' => 'favor.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','favor');
    Route::post('sml_admin/uu-dai', ['as' => 'favor.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/uu-dai/create', ['as' => 'favor.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','favor');
    Route::get('sml_admin/uu-dai/{id}/edit', ['as' => 'favor.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','favor');
    Route::patch('sml_admin/uu-dai/{id}', ['as' => 'favor.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','favor');
    Route::delete('sml_admin/uu-dai/{id}', ['as' => 'favor.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','favor');

    //NEWS
    Route::get('sml_admin/tin-tuc', ['as' => 'news.index', 'uses' => 'PostController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','news');
    Route::post('sml_admin/tin-tuc/create', ['as' => 'news.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','news');
    Route::post('sml_admin/tin-tuc', ['as' => 'news.search', 'uses' => 'PostController@search']);
    Route::get('sml_admin/tin-tuc/create', ['as' => 'news.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','news');
    Route::get('sml_admin/tin-tuc/{id}/edit', ['as' => 'news.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','news');
    Route::patch('sml_admin/tin-tuc/{id}', ['as' => 'news.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','news');
    Route::delete('sml_admin/tin-tuc/{id}', ['as' => 'news.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','news');


    //LIBRARY
    Route::get('sml_admin/thu-vien', ['as' => 'library.index', 'uses' => 'PostController@index', 'middleware' => ['permission:post-list|post-create|post-edit|post-delete']])->defaults('type','library');
    Route::post('sml_admin/thu-vien/create', ['as' => 'library.store', 'uses' => 'PostController@store', 'middleware' => ['permission:post-create']])->defaults('type','library');
    Route::get('sml_admin/thu-vien/create', ['as' => 'library.create', 'uses' => 'PostController@create', 'middleware' => ['permission:post-create']])->defaults('type','library');
    Route::get('sml_admin/thu-vien/{id}/edit', ['as' => 'library.edit', 'uses' => 'PostController@edit', 'middleware' => ['permission:post-edit']])->defaults('type','library');
    Route::patch('sml_admin/thu-vien/{id}', ['as' => 'library.update', 'uses' => 'PostController@update', 'middleware' => ['permission:post-edit']])->defaults('type','library');
    Route::delete('sml_admin/thu-vien/{id}', ['as' => 'library.destroy', 'uses' => 'PostController@destroy', 'middleware' => ['permission:post-delete']])->defaults('type','library');



    //CATEGORY PRODUCT
    Route::get('sml_admin/danh-muc-san-pham', ['as' => 'categoryproduct.index', 'uses' => 'CategoryProductController@index', 'middleware' => ['permission:page-list|page-create|page-edit|page-delete']]);
    Route::post('sml_admin/danh-muc-san-pham/search', ['as' => 'categoryproduct.search', 'uses' => 'CategoryProductController@search']);
    Route::post('sml_admin/danh-muc-san-pham/paste', ['as' => 'categoryproduct.paste', 'uses' => 'CategoryProductController@paste']);
    Route::post('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.store', 'uses' => 'CategoryProductController@store', 'middleware' => ['permission:page-create']]);
//    Route::post('sml_admin/danh-muc-bai-vie', ['as' => 'categorypost.search', 'uses' => 'TuyenDungController@search']);
    Route::get('sml_admin/danh-muc-san-pham/create', ['as' => 'categoryproduct.create', 'uses' => 'CategoryProductController@create', 'middleware' => ['permission:page-create']]);
    Route::get('sml_admin/danh-muc-san-pham/{id}/edit', ['as' => 'categoryproduct.edit', 'uses' => 'CategoryProductController@edit', 'middleware' => ['permission:page-edit']]);
    Route::patch('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.update', 'uses' => 'CategoryProductController@update', 'middleware' => ['permission:page-edit']]);
    Route::delete('sml_admin/danh-muc-san-pham/{id}', ['as' => 'categoryproduct.destroy', 'uses' => 'CategoryProductController@destroy', 'middleware' => ['permission:page-delete']]);

    //PRODUCT
    Route::get('sml_admin/san-pham', ['as' => 'product.index', 'uses' => 'ProductController@index', 'middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::post('sml_admin/san-pham/create', ['as' => 'product.store', 'uses' => 'ProductController@store', 'middleware' => ['permission:product-create']]);
    Route::post('sml_admin/san-pham/search', ['as' => 'product.search', 'uses' => 'ProductController@search']);
    Route::post('sml_admin/san-pham/past', ['as' => 'product.paste', 'uses' => 'ProductController@paste']);
    Route::get('sml_admin/san-pham/create', ['as' => 'product.create', 'uses' => 'ProductController@create', 'middleware' => ['permission:product-create']]);
    Route::get('sml_admin/san-pham/{id}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit', 'middleware' => ['permission:product-edit']]);
    Route::patch('sml_admin/san-pham/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update', 'middleware' => ['permission:product-edit']]);
    Route::delete('sml_admin/san-pham/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy', 'middleware' => ['permission:product-delete']]);

    //CONFIG
    //------GENERAL
    Route::get('sml_admin/config/general', ['as' => 'config.general.index', 'uses' => 'ConfigGeneralController@getConfig']);
    Route::post('sml_admin/config/general', ['as' => 'config.general.store', 'uses' => 'ConfigGeneralController@saveConfig']);
    Route::get('sml_admin/config-text/general', ['as' => 'config-text.general.index', 'uses' => 'ConfigGeneralController@getConfigText']);
    //-------EMAIL

    Route::get('sml_admin/config/email', ['as' => 'config.email.index', 'uses' => 'ConfigEmailController@getEmailConfig']);
    Route::post('sml_admin/config/email', ['as' => 'config.email.store', 'uses' => 'ConfigEmailController@saveEmailConfig']);

    //MENU
    Route::get('sml_admin/menu', ['as' => 'menu.index', 'uses' => 'MenuController@index']);
    Route::post('sml_admin/menu/create', ['as' => 'menu.store', 'uses' => 'MenuController@store']);
    Route::post('sml_admin/menu/order-menu', ['as' => 'menu.order', 'uses' => 'MenuController@orderMenu']);
    Route::put('sml_admin/menu/edit', ['as' => 'menu.update', 'uses' => 'MenuController@update']);
    Route::delete('sml_admin/menu/{id}', ['as' => 'menu.delete', 'uses' => 'MenuController@delete']);
});
