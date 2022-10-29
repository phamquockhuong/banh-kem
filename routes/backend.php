<?php 
Route::group(['prefix'=>'admin','namespace'=>'backend','as'=>'admin.'],function(){
    Route::resource('category','ControllerCategory',['only' => ['index', 'store', 'show']]);
    Route::post('/category_delete','ControllerCategory@delete')->name('category_delete');
    Route::post('/category_destroy','ControllerCategory@destroy')->name('category_destroy');
    Route::post('/category_edit','ControllerCategory@edit')->name('category_edit');
    Route::post('/category_update','ControllerCategory@update')->name('category_update');
    // Route::get('/category_parent','ControllerCategory@parent')->name('category_parent');
    Route::get('/category_trash','ControllerCategory@trash')->name('category_trash');
    Route::post('/category_untrash','ControllerCategory@untrash')->name('category_untrash');
    Route::delete('category_delete-checked', 'ControllerCategory@deleteChecked')->name('category_deleteAll');
    Route::post('category_remove-checked', 'ControllerCategory@removeChecked')->name('category_removeAll');
    Route::post('category_untrash-checked', 'ControllerCategory@untrashChecked')->name('category_untrashAll');
    Route::resource('product','ControllerProduct');
    Route::resource('size','ControllerSizeProduct');
    Route::post('/user/delete_All','UserController@deleteAll')->name('user.delete_All');
    Route::resources([
    'dashboard' => 'ControllerName',
    'user' => 'UserController',
    // 'method' => 'MethodController',
    // 'features' => 'FeaturesController',
    // 'contact' => 'ContactController',
    // 'order' => 'OrderController',
    // 'promotion' => 'PromotionController',
    // 'user' => 'UserController',
    // 'order_detail' => 'Order_detailController',
    // 'pay' => 'PayController',
    // 'slide' => 'SlideController',
    // 'comment_blog' => 'CommentblogController',
    // 'comment' => 'CommentController',
   
    ]);
    // Route::resource('product','ProductController');
    // Route::resource('menu','MenuController');
    // Route::resource('storelocaltion','StorelocaltionController');
    // Route::resource('admin','AdminController');
});

 ?>